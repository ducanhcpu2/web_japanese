// import Layout from '../pages/Layout/Layout.vue';
// import Login from '../pages/Auth/Login.vue';
// import Landing from '../pages/landing/Landing.vue';
// import Register from '../pages/Auth/Register.vue';
// import ResetPasswordForm from '../pages/Auth/ResetPasswordForm.vue';
// import Terms from '../pages/Auth/Terms.vue';
// import ForgotPassword from '../pages/Auth/ForgotPassword.vue';
// import Dashboard from '../pages/Dashboard.vue';
// import Kyc from '../pages/Kyc.vue';
// import Whitelist from '../pages/Whitelist.vue';
// import ProfileSetting from '../pages/ProfileSetting';
// import BountyApp from '../pages/bounty_airdrop/BountyAirdropApp.vue';
// import Faq from '../pages/Faq.vue';
// import Balance from '../pages/Balance.vue';
// import Deposit from '../pages/Deposit.vue';
// import Transactions from '../pages/Transactions';
// import TokenHistory from '../pages/TokenHistory';
// import Guide from '../pages/Guide';
import admin from '../component/user.vue';

// const routes = [
//   {
//     path: '/login',
//     component: Login,
//     name: 'Login'
//   },
//   {
//     path: '/landing',
//     component: Landing,
//     name: 'Landing'
//   },
//   {
//     path: '/register',
//     component: Register,
//     name: 'Register'
//   },
//   {
//     path: '/terms',
//     component: Terms,
//     name: 'Terms'
//   },
//   {
//     path: '/reset-password',
//     component: ForgotPassword,
//     name: 'Forgot Password'
//   },
//   {
//     path: '/whitelist/create',
//     component: Whitelist,
//     name: 'Whitelist'
//   },
//   {
//     path: '/guide',
//     component: Guide,
//     name: 'Guide'
//   },
//   {
//     path: '/password/reset/:token',
//     component: ResetPasswordForm,
//     name: 'Reset Password'
//   },
//   {
//     path: '/faq',
//     component: Faq,
//     name: 'Faq'
//   },
//   {
//     path: '/',
//     component: Layout,
//     redirect: '/dashboard',
//     children: [
//       {
//         path: '/dashboard',
//         name: 'Dashboard',
//         component: Dashboard
//       },
//       {
//         path: '/bounty',
//         name: 'Bounty & Airdrop',
//         component: BountyApp
//       },
//       {
//         path: '/users/kyc',
//         name: 'Kyc',
//         component: Kyc
//       },
//       {
//         path: '/users/profileSetting',
//         name: 'Profile Setting',
//         component: ProfileSetting
//       },
//       {
//         path: '/users/profileSetting/:type',
//         name: 'Profile Setting type',
//         component: ProfileSetting
//       },
//       {
//         path: '/balances',
//         name: 'Balances',
//         component: Balance
//       },
//       {
//         path: '/deposit',
//         name: 'Deposit',
//         component: Deposit
//       },
//       {
//         path: '/wallet/transactions',
//         name: 'Deposit History',
//         component: Transactions
//       },
//       {
//         path: '/token-history',
//         name: 'Token History',
//         component: TokenHistory
//       },
//     ]
//   },
//   { path: '*', redirect: '/dashboard' }
// ]


const routes = [
  {
    path: '/admin',
    component: admin,
    name: 'admin'
  },
]
export default routes;
