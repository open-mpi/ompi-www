<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 28 10:29:19 2012" -->
<!-- isoreceived="20121028142919" -->
<!-- sent="Sun, 28 Oct 2012 16:28:53 +0200" -->
<!-- isosent="20121028142853" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="CA+Y5xYfAUKeq1=-m0YLxQtz5ONOPty24v7D7EaM9STZe3Kd2QA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E5DF6BC2-6EC9-4421-A781-891ACE3FEFC6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-28 10:28:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11663.php">Edgar Gabriel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11661.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11661.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11692.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11692.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Oct 28, 2012 at 3:51 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 26, 2012, at 12:48 PM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for reviewing and helping me to get this up to the project's
</span><br>
<span class="quotelev2">&gt;&gt; standards!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank *you*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My prior reviews were from reading the code only.  I just tried a few compile tests and got the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. With gcc 4.4.6, I got a bunch of these:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; ../../../ompi/include/mpi.h:997: warning: ISO C90 does not support complex types
</span><br>
<span class="quotelev1">&gt; ../../../ompi/include/mpi.h:998: warning: ISO C90 does not support complex types
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. With clang 3.1, I got a bunch of these:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; ../../../ompi/include/mpi.h:1084:5: warning: 'OMPI_HAVE_FORTRAN_COMPLEX8' is not defined, evaluates to 0 [-Wundef]
</span><br>
<span class="quotelev1">&gt; #if OMPI_HAVE_FORTRAN_COMPLEX8
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; ../../../ompi/include/mpi.h:1089:5: warning: 'OMPI_HAVE_FORTRAN_COMPLEX16' is not defined, evaluates to 0 [-Wundef]
</span><br>
<span class="quotelev1">&gt; #if OMPI_HAVE_FORTRAN_COMPLEX16
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; ../../../ompi/include/mpi.h:1094:5: warning: 'OMPI_HAVE_FORTRAN_COMPLEX32' is not defined, evaluates to 0 [-Wundef]
</span><br>
<span class="quotelev1">&gt; #if OMPI_HAVE_FORTRAN_COMPLEX32
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<p>Thank you for the feedback!  Hopefully the attached patch fixes both of these.
<br>
<p>1. There are two helper structs with complex numbers.  I predicated
<br>
the struct declarations and use to appear only in C99.
<br>
<p>2. These macros were indeed missing.
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11662/ompi-v7.patch">ompi-v7.patch</a>
</ul>
<!-- attachment="ompi-v7.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11663.php">Edgar Gabriel: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>Previous message:</strong> <a href="11661.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11661.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11692.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Reply:</strong> <a href="11692.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
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
