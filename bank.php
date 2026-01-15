<?php
include 'includes/header.php';
include 'classes/Account.php';
include 'classes/Customer.php';

$accounts = [
    new Account("10500", "Savings", 36500),
    new Account("11000", "Checking", -2200),
    new Account("31100", "Payroll", 20250),
    new Account("50100", "Credit", -6000)
];

$customer = new Customer("James", "Almariego", $accounts);
?>

<h1>NAME: <?= $customer->getFullName(); ?></h1>

<table>
    <tr>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance</th>
    </tr>

    <?php foreach ($customer->accounts as $account): ?>
        <tr>
            <td><?= $account->accountNumber; ?></td>
            <td><?= $account->accountType; ?></td>

            <?php if ($account->balance >= 0): ?>
                <td class="credit">
                    ₱<?= number_format($account->balance, 2); ?>
                </td>
            <?php else: ?>
                <td class="overdrawn">
                    ₱<?= number_format($account->balance, 2); ?>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>

<?php include 'includes/footer.php'; ?>
