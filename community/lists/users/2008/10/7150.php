<?
$subject_val = "Re: [OMPI users] Equivalent .h files";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 05:48:48 2008" -->
<!-- isoreceived="20081031094848" -->
<!-- sent="Fri, 31 Oct 2008 09:48:43 +0000" -->
<!-- isosent="20081031094843" -->
<!-- name="Benjamin Lamptey" -->
<!-- email="bllamptey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Equivalent .h files" -->
<!-- id="71ec5a370810310248g91a4d9ftca708e6e6306d0c9_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71ec5a370810300733h5920d577hffaea987b7120378_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Equivalent .h files<br>
<strong>From:</strong> Benjamin Lamptey (<em>bllamptey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 05:48:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7151.php">Jeff Squyres: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7149.php">Ralph Castain: "Re: [OMPI users] Openmpi ver1.3beta1"</a>
<li><strong>In reply to:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7151.php">Jeff Squyres: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Reply:</strong> <a href="7151.php">Jeff Squyres: "Re: [OMPI users] Equivalent .h files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again,
<br>
I have to be more specific with my problem.
<br>
<p>1) I am using the Mac OS X (Leopard) operating system.
<br>
When I do uname -a, I get Darwin Kernel Version 9.5.0
<br>
<p>2) My code if fortran 90
<br>
<p>3) I tried using the mpif90 wrapper and I got the following message
<br>
<p>xxxxxxxxxxxxx
<br>
mpif90  -c -O3   /Users/lamptey/projectb/src/blag_real_burnmpi.f90
<br>
--------------------------------------------------------------------------
<br>
Unfortunately, this installation of Open MPI was not compiled with
<br>
Fortran 90 support.  As such, the mpif90 compiler is non-functional.
<br>
<p>--------------------------------------------------------------------------
<br>
make: *** [blag_real_burnmpi.o] Error 1
<br>
xxxxxxxxxxxxx
<br>
<p>4) I have the g95 compiler installed. So when I try using the
<br>
g95, (with include &quot;mpif.h&quot; or 'mpif.h'), I get the following mesage:
<br>
<p>xxxxxxxxxxxxxx
<br>
g95 -fno-pic -c -O3   /Users/lamptey/projectb/src/blag_real_burnmpi.f90
<br>
Error: Can't open included file 'mpif.h'
<br>
make: *** [blag_real_burnmpi.o] Error 1
<br>
xxxxxxxxxxxxxxx
<br>
<p>5) What are people's experience in this case?
<br>
<p>Thanks
<br>
Ben
<br>
<p>On Thu, Oct 30, 2008 at 2:33 PM, Benjamin Lamptey &lt;bllamptey_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am new at using open-mpi and will like to know something basic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the equivalent of the &quot;mpif.h&quot; in open-mpi which is normally
</span><br>
<span class="quotelev1">&gt; &quot;included&quot; at
</span><br>
<span class="quotelev1">&gt; the beginning of mpi codes (fortran in this case).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I shall appreciate that for cpp as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7150/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7151.php">Jeff Squyres: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7149.php">Ralph Castain: "Re: [OMPI users] Openmpi ver1.3beta1"</a>
<li><strong>In reply to:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7151.php">Jeff Squyres: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Reply:</strong> <a href="7151.php">Jeff Squyres: "Re: [OMPI users] Equivalent .h files"</a>
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
