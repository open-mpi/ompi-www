<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 26 17:29:00 2007" -->
<!-- isoreceived="20070326212900" -->
<!-- sent="Mon, 26 Mar 2007 22:28:54 +0100" -->
<!-- isosent="20070326212854" -->
<!-- name="Daniele Avitabile" -->
<!-- email="d.avitabile_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation fails on Mac Os" -->
<!-- id="6c915be80703261428l21ed1227w4929c9d608493b6a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BF5740B8-5A87-442E-83A4-D1564DC58C2C_at_lanl.gov" -->
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
<strong>From:</strong> Daniele Avitabile (<em>d.avitabile_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-26 17:28:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2924.php">de Almeida, Valmor F.: "[OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>Previous message:</strong> <a href="2922.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>In reply to:</strong> <a href="2920.php">Brian Barrett: "Re: [OMPI users] Installation fails on Mac Os"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot Brian,
<br>
<p>I think I will compile my applications with the new gcc and have open mpi
<br>
compiled with the system-provided gcc, as you said.
<br>
<p>Thanks a lot.
<br>
<p>Daniele
<br>
<p>On 3/26/07, Brian Barrett &lt;bbarrett_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2007, at 11:20 AM, Daniele Avitabile wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi everybody,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to install open mpi on a Mac Os XServer, and the make
</span><br>
<span class="quotelev2">&gt; &gt; all command exits with the error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; openmpi_install_failed.tar.gz
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; as you can see from the output files I attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some comments that may be helpful:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) I am not root on the machine, but I have permissions to write
</span><br>
<span class="quotelev2">&gt; &gt; in /usr/local/applications/, which is the directory in which I want
</span><br>
<span class="quotelev2">&gt; &gt; to install openmpi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) In the same directory there is already an openmpi 1.1.2
</span><br>
<span class="quotelev2">&gt; &gt; installation, with gcc-4.0.1 compilers. I want to install the
</span><br>
<span class="quotelev2">&gt; &gt; current version of openmpi
</span><br>
<span class="quotelev2">&gt; &gt; and use a different compiler, namely the gcc compilers optimised
</span><br>
<span class="quotelev2">&gt; &gt; for apple intel. They reside in the folder /usr/local/bin, and I
</span><br>
<span class="quotelev2">&gt; &gt; pass them in the make command, as you can see from the attached file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea as to why I receive that error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short answer:
</span><br>
<span class="quotelev1">&gt; You need to either use the system-provided GCC or rebuild your
</span><br>
<span class="quotelev1">&gt; version of GCC to use /usr/bin/libtool instead of /usr/bin/ld to link.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Long answer:
</span><br>
<span class="quotelev1">&gt; There are some things that are a little complicated to do with Mach-O
</span><br>
<span class="quotelev1">&gt; if you want library versioning and plug-ins and all that to work
</span><br>
<span class="quotelev1">&gt; properly.  GNU Libtool (and therefore Open MPI) assume that if you
</span><br>
<span class="quotelev1">&gt; are using GCC, it can emit options to the linker that are meant for /
</span><br>
<span class="quotelev1">&gt; usr/bin/libtool, the library creation helper for OS X.  -
</span><br>
<span class="quotelev1">&gt; compatibility_version is one of those things.  Your version of GCC is
</span><br>
<span class="quotelev1">&gt; instead invoking /usr/bin/ld directly, so things are going wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can still use the &quot;intel optimized&quot; version of GCC to compile
</span><br>
<span class="quotelev1">&gt; your application, as long as it doesn't use GNU libtool, of course.
</span><br>
<span class="quotelev1">&gt; Just use the system GCC to compile Open MPI and all will be fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2924.php">de Almeida, Valmor F.: "[OMPI users] very long linking time with mixed-language libraries"</a>
<li><strong>Previous message:</strong> <a href="2922.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>In reply to:</strong> <a href="2920.php">Brian Barrett: "Re: [OMPI users] Installation fails on Mac Os"</a>
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
