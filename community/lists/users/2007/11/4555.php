<?
$subject_val = "[OMPI users] configure: error: Cannot support Fortran MPI_ADDRESS_KIND!";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 00:34:39 2007" -->
<!-- isoreceived="20071129053439" -->
<!-- sent="Thu, 29 Nov 2007 11:04:34 +0530" -->
<!-- isosent="20071129053434" -->
<!-- name="geetha r" -->
<!-- email="geethar4_at_[hidden]" -->
<!-- subject="[OMPI users] configure: error: Cannot support Fortran MPI_ADDRESS_KIND!" -->
<!-- id="263540390711282134i49d5effbh3aaac75c57f9bf90_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] configure: error: Cannot support Fortran MPI_ADDRESS_KIND!<br>
<strong>From:</strong> geetha r (<em>geethar4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 00:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4556.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Previous message:</strong> <a href="4554.php">geetha r: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for your reply, ARRAY of logical problem gone,  when i
<br>
used -disable-mpi-f77 option,but now  iam getting following error
<br>
<p>configure: error: Cannot support Fortran MPI_ADDRESS_KIND!
<br>
<p><p>option string iam using as follows
<br>
<p>./configure --disable-mpi-f77  --with-devel-headers.
<br>
<p>Thanks,
<br>
geetha.
<br>
<p>On 11/29/07, Terry Frankcombe &lt;terry_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 2007-11-28 at 13:20 -0500, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; If your F77 compiler do not support array of LOGICAL variables (which
</span><br>
<span class="quotelev2">&gt; &gt; seems to be the case if you look in the config.log file), then you're
</span><br>
<span class="quotelev2">&gt; &gt; left with only one option. Remove the F77 support from the
</span><br>
<span class="quotelev2">&gt; &gt; compilation. This means adding the --disable-mpi-f77 option to the ./
</span><br>
<span class="quotelev2">&gt; &gt; configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's a lot weirder than that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Fortran 77 REAL*8 does not have expected size!
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Expected 8, got 8
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Disabling MPI support for Fortran 77 REAL*8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somehow, 8/=8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-\
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4555/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4556.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<li><strong>Previous message:</strong> <a href="4554.php">geetha r: "Re: [OMPI users] ./configure error on windows while installing openmpi-1.2.4(latest)"</a>
<!-- nextthread="start" -->
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
