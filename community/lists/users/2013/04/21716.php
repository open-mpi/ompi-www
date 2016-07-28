<?
$subject_val = "[OMPI users] LDBL_MANT_DIG declaration trouble";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 12 10:09:24 2013" -->
<!-- isoreceived="20130412140924" -->
<!-- sent="Fri, 12 Apr 2013 10:09:09 -0400" -->
<!-- isosent="20130412140909" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="[OMPI users] LDBL_MANT_DIG declaration trouble" -->
<!-- id="51681585.8050303_at_iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL_eiiR2SqaWwPUkMjDzZYGF1658qNZS8L708dDU+sdomOibaw_at_mail.gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] LDBL_MANT_DIG declaration trouble<br>
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-12 10:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21717.php">Ralph Castain: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Previous message:</strong> <a href="21715.php">Ralph Castain: "Re: [OMPI users] Greenplum's MR+"</a>
<li><strong>In reply to:</strong> <a href="21699.php">Pradeep Jha: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21717.php">Ralph Castain: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Reply:</strong> <a href="21717.php">Ralph Castain: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;I am sorry to bother everyone.  I have had no trouble building 1.6.3 
<br>
with the Intel compiler. Now I am having to repeat the exercise for 
<br>
GNU.  In opal/util/arch.h (about line 260) is the function below. I am 
<br>
getting an error that LDBL_MANT_DIG is not declared.  I can not seem to 
<br>
find where it is declared.  Any hints would be appreciated.  Thanks.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p><p>static inline int32_t opal_arch_ldisintel( void )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long double ld = 2.0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i, j;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint32_t* pui = (uint32_t*)(void*)&amp;ld;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = LDBL_MANT_DIG / 32;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = (LDBL_MANT_DIG % 32) - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( opal_arch_isbigendian() ) { /* big endian */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = (sizeof(long double) / sizeof(unsigned int)) - j;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( i &lt; 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = 31;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = j+1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( i &lt; 0 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = 31;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;j = j-1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (pui[j] &amp; (1 &lt;&lt; i) ? 1 : 0);
<br>
}
<br>
<p><p>Function is described:
<br>
/* we must find which representation of long double is used
<br>
&nbsp;&nbsp;* intel or sparc. Both of them represent the long doubles using a close to
<br>
&nbsp;&nbsp;* IEEE representation (seeeeeee..emmm...m) where the mantissa look like
<br>
&nbsp;&nbsp;* 1.????. For the intel representaion the 1 is explicit, and for the sparc
<br>
&nbsp;&nbsp;* the first one is implicit. If we take the number 2.0 the exponent is 1
<br>
&nbsp;&nbsp;* and the mantissa is 1.0 (the sign of course should be 0). So if we check
<br>
&nbsp;&nbsp;* for the first one in the binary representation of the number, we will
<br>
&nbsp;&nbsp;* find the bit from the exponent, so the next one should be the begining
<br>
&nbsp;&nbsp;* of the mantissa. If it's 1 then we have an intel representaion, if not
<br>
&nbsp;&nbsp;* we have a sparc one. QED
<br>
&nbsp;&nbsp;*/
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21717.php">Ralph Castain: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Previous message:</strong> <a href="21715.php">Ralph Castain: "Re: [OMPI users] Greenplum's MR+"</a>
<li><strong>In reply to:</strong> <a href="21699.php">Pradeep Jha: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21717.php">Ralph Castain: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Reply:</strong> <a href="21717.php">Ralph Castain: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
