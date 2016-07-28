<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 12:11:25 2007" -->
<!-- isoreceived="20070330161125" -->
<!-- sent="Fri, 30 Mar 2007 09:11:21 -0700" -->
<!-- isosent="20070330161121" -->
<!-- name="Jeff Stuart" -->
<!-- email="cpunerd_at_[hidden]" -->
<!-- subject="[OMPI users] Getting a core-dump with OpenMPI" -->
<!-- id="696fd4820703300911gf28824fl2fbd5f16d1c3a951_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Stuart (<em>cpunerd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-30 12:11:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2952.php">Warner Yuen: "[OMPI users] Newbie Hostfile Quesiton"</a>
<li><strong>Previous message:</strong> <a href="2950.php">Jeff Squyres: "Re: [OMPI users] Jeff Squyres: &quot;Re:  password orted problem&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2954.php">Jeff Squyres: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2954.php">Jeff Squyres: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2955.php">George Bosilca: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using OpenMPI, and the documentation says that only a totalview
<br>
style of debugger can be used. With that in mind, all I want to do is
<br>
get a core-dump when a process crashes. I can then just load the core
<br>
into GDB. Is there any easy way to do this?
<br>
<p>I tried calling signal(SIGSEGV, SIG_DFL); signal(SIGABRT, SIG_DFL); to
<br>
no avail. All that happens is that I don't get a call stack dump
<br>
anymore.
<br>
<p>Thanks,
<br>
-Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2952.php">Warner Yuen: "[OMPI users] Newbie Hostfile Quesiton"</a>
<li><strong>Previous message:</strong> <a href="2950.php">Jeff Squyres: "Re: [OMPI users] Jeff Squyres: &quot;Re:  password orted problem&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2954.php">Jeff Squyres: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2954.php">Jeff Squyres: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2955.php">George Bosilca: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
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
