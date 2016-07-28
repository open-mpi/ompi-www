<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 19:25:00 2014" -->
<!-- isoreceived="20140123002500" -->
<!-- sent="Wed, 22 Jan 2014 16:24:58 -0800" -->
<!-- isosent="20140123002458" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64" -->
<!-- id="CAAvDA17xpRFpJVnF8H3wXCN8wVU7wKJdZjPHseMW5ydQWKa=rA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15Z231e1_P8wOXWuoSEVPOkHpJxVfZh6jJjGihUO3QOAw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 19:24:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13854.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13852.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>In reply to:</strong> <a href="13849.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13887.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13887.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 22, 2014 at 2:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My ia64 asm is a bit rusty, but I'll give a quick look if/when I can.
</span><br>
<p><p>I had a look (in v1.7) and this is what I see:
<br>
<p>$cat -n IA64.asm | grep -A14 opal_atomic_cmpset_acq_64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;70  opal_atomic_cmpset_acq_64:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;71          .prologue
<br>
&nbsp;&nbsp;&nbsp;&nbsp;72          .body
<br>
&nbsp;&nbsp;&nbsp;&nbsp;73          mov ar.ccv=r33;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;74          cmpxchg8.acq r32=[r32],r34,ar.ccv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;75          ;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;76          sxt4 r32 = r32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;77          ;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;78          cmp.eq p6, p7 = r33, r32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;79          ;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;80          (p6) addl r8 = 1, r0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;81          (p7) mov r8 = r0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;82          br.ret.sptk.many b0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;83          ;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;84          .endp opal_atomic_cmpset_acq_64#
<br>
<p>The (approximate and non-atomic) C equivalent is:
<br>
<p>// r32 = address
<br>
// r33 = oldvalue
<br>
// r34 = newvalue
<br>
int opal_atomic_cmpset_acq_64(int64_t r32, int64_t r33, int64 r34) {
<br>
&nbsp;&nbsp;&nbsp;int64_t ccv = r33; // L73
<br>
&nbsp;&nbsp;&nbsp;if (*(int64_t *)r32 == ccv) *(int64_t *)r32 = r34; // L74
<br>
<p>&nbsp;&nbsp;&nbsp;r32 = (int64_t)(int32_t)r32; // L76 = sign-extend 32-&gt;64
<br>
<p>&nbsp;&nbsp;&nbsp;bool p6, p7;
<br>
&nbsp;&nbsp;&nbsp;p7 = !(p6 = (r33 == r32)); // L78
<br>
<p>&nbsp;&nbsp;&nbsp;const int r0 = 0;
<br>
&nbsp;&nbsp;&nbsp;int r8;
<br>
&nbsp;&nbsp;&nbsp;if (p6) r8 = 1 + r0; // L80
<br>
&nbsp;&nbsp;&nbsp;if (p7) r8 = r0; // L81
<br>
&nbsp;&nbsp;&nbsp;return r8; // L82
<br>
}
<br>
<p>Which is fine except that line 76 is totally wrong!!
<br>
The &quot;sxt4&quot; instruction is &quot;sign-extend from 4 bytes to 8 bytes&quot;.
<br>
Thus the upper 32-bits of the value read from memory are lost!
<br>
Unless the upper 33 bits off r33 (oldvalue) are all 0s or all 1s, the
<br>
comparison on line 78 MUST fail.
<br>
This explains the hang, as the lifo push will loop indefinitely waiting for
<br>
the success of this cmpset.
<br>
<p>Note the same erroneous instruction is also present in the _rel variant (at
<br>
line 94).
<br>
The trunk has the same issue.
<br>
This code has not changed at all since IA64.asm was added way back in r4471.
<br>
<p>I won't have access to the IA64 platform again until tomorrow AM.
<br>
So, testing my hypothesis will need to wait.
<br>
<p>BTW:
<br>
IFF I am right about the source of this problem, then it would be
<br>
beneficial to have (and I may contribute) a stronger test (for &quot;make
<br>
check&quot;) that would detect this sort of bug in the atomics (specifically
<br>
look for both false-positive and false-negative return value from 64-bit
<br>
cmpset operations with values satisfying a range of &quot;corner cases&quot;).  I
<br>
think I have single-bit and double-bit &quot;marching tests&quot; for cmpset in my
<br>
own arsenal of tests for GASNet's atomics.  If I don't have time to
<br>
contribute a complete test, I can at least contribute that logic for
<br>
somebody else to port to the OPAL atomics.
<br>
<p>-Paul
<br>
<p>P.S.:
<br>
The cmpxchgN for N in 1,2,4 are documented as ZERO-extending their loads to
<br>
64-bits.
<br>
So, there is a slim chance that the sxt4 actually was intended for the
<br>
32-bit cmpset code.
<br>
However, since the comparison used there is a &quot;cmp4.eq&quot; the &quot;sxt4&quot; would
<br>
still not be needed.
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13854.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13852.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>In reply to:</strong> <a href="13849.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13887.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13887.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
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
