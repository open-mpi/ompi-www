<?
$subject_val = "Re: [OMPI users] LDBL_MANT_DIG declaration trouble";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 12 10:20:16 2013" -->
<!-- isoreceived="20130412142016" -->
<!-- sent="Fri, 12 Apr 2013 07:20:09 -0700" -->
<!-- isosent="20130412142009" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LDBL_MANT_DIG declaration trouble" -->
<!-- id="1E9A5172-786F-4C4A-BE77-4119A24372EC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51681585.8050303_at_iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] LDBL_MANT_DIG declaration trouble<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-12 10:20:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21718.php">Ray Sheppard: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Previous message:</strong> <a href="21716.php">Ray Sheppard: "[OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>In reply to:</strong> <a href="21716.php">Ray Sheppard: "[OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21718.php">Ray Sheppard: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Reply:</strong> <a href="21718.php">Ray Sheppard: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It should have been defined in &lt;float.h&gt;. Is that include file not found? You might check to ensure it was defined there.
<br>
<p><p>On Apr 12, 2013, at 7:09 AM, Ray Sheppard &lt;rsheppar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  I am sorry to bother everyone.  I have had no trouble building 1.6.3 with the Intel compiler. Now I am having to repeat the exercise for GNU.  In opal/util/arch.h (about line 260) is the function below. I am getting an error that LDBL_MANT_DIG is not declared.  I can not seem to find where it is declared.  Any hints would be appreciated.  Thanks.
</span><br>
<span class="quotelev1">&gt;                                         Ray
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static inline int32_t opal_arch_ldisintel( void )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    long double ld = 2.0;
</span><br>
<span class="quotelev1">&gt;    int i, j;
</span><br>
<span class="quotelev1">&gt;    uint32_t* pui = (uint32_t*)(void*)&amp;ld;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    j = LDBL_MANT_DIG / 32;
</span><br>
<span class="quotelev1">&gt;    i = (LDBL_MANT_DIG % 32) - 1;
</span><br>
<span class="quotelev1">&gt;    if( opal_arch_isbigendian() ) { /* big endian */
</span><br>
<span class="quotelev1">&gt;        j = (sizeof(long double) / sizeof(unsigned int)) - j;
</span><br>
<span class="quotelev1">&gt;        if( i &lt; 0 ) {
</span><br>
<span class="quotelev1">&gt;            i = 31;
</span><br>
<span class="quotelev1">&gt;            j = j+1;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;        if( i &lt; 0 ) {
</span><br>
<span class="quotelev1">&gt;            i = 31;
</span><br>
<span class="quotelev1">&gt;            j = j-1;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    return (pui[j] &amp; (1 &lt;&lt; i) ? 1 : 0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Function is described:
</span><br>
<span class="quotelev1">&gt; /* we must find which representation of long double is used
</span><br>
<span class="quotelev1">&gt; * intel or sparc. Both of them represent the long doubles using a close to
</span><br>
<span class="quotelev1">&gt; * IEEE representation (seeeeeee..emmm...m) where the mantissa look like
</span><br>
<span class="quotelev1">&gt; * 1.????. For the intel representaion the 1 is explicit, and for the sparc
</span><br>
<span class="quotelev1">&gt; * the first one is implicit. If we take the number 2.0 the exponent is 1
</span><br>
<span class="quotelev1">&gt; * and the mantissa is 1.0 (the sign of course should be 0). So if we check
</span><br>
<span class="quotelev1">&gt; * for the first one in the binary representation of the number, we will
</span><br>
<span class="quotelev1">&gt; * find the bit from the exponent, so the next one should be the begining
</span><br>
<span class="quotelev1">&gt; * of the mantissa. If it's 1 then we have an intel representaion, if not
</span><br>
<span class="quotelev1">&gt; * we have a sparc one. QED
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21718.php">Ray Sheppard: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Previous message:</strong> <a href="21716.php">Ray Sheppard: "[OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>In reply to:</strong> <a href="21716.php">Ray Sheppard: "[OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21718.php">Ray Sheppard: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
<li><strong>Reply:</strong> <a href="21718.php">Ray Sheppard: "Re: [OMPI users] LDBL_MANT_DIG declaration trouble"</a>
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
