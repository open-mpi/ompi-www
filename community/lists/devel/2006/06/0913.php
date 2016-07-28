<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  1 17:01:34 2006" -->
<!-- isoreceived="20060601210134" -->
<!-- sent="Thu, 01 Jun 2006 17:01:30 -0400" -->
<!-- isosent="20060601210130" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="[OMPI devel] SIGSTOP and SIGCONT on orted" -->
<!-- id="447F55AA.6060305_at_Sun.COM" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-01 17:01:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0914.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0912.php">Neil Ludban: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0914.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe reply:</strong> <a href="0914.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe reply:</strong> <a href="0916.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe reply:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe reply:</strong> <a href="0920.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a question on signals. Normally when I do a SIGTERM (control-C) 
<br>
on mpirun, the signal seems to get handled in a way that it broadcasts 
<br>
to the orted and processes on the execution hosts. However, when I send 
<br>
a SIGSTOP to mpirun, mpirun seems to have stopped, but the processes of 
<br>
the user executable continue to run. I guess I could hook up the 
<br>
debugger to mpirun and orted to see why they are handled differently, 
<br>
but I guess I anxious to hear about it here.
<br>
<p>I am trying to see the behavior of SIGSTOP and SIGCONT for the 
<br>
suspension/resumption feature in N1GE. It'll try to use these signals to 
<br>
stop and continue both mpirun and orted (and its processes), but the 
<br>
signals (SIGSTOP and SIGCONT) don't seem to get propagated to the remote 
<br>
orted.
<br>
<p>I can see there are some issues for implementing this feature on N1GE 
<br>
because the 'qrsh' interface does not send the signal to orted on the 
<br>
remote node, but only to 'mpirun'. I am trying to see how to work around 
<br>
this.
<br>
<p><pre>
-- 
Thanks,
- Pak Lui
pak.lui_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0914.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Previous message:</strong> <a href="0912.php">Neil Ludban: "Re: [OMPI devel] memory_malloc_hooks.c and dlclose()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0914.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe reply:</strong> <a href="0914.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe reply:</strong> <a href="0916.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe reply:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>Maybe reply:</strong> <a href="0920.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
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
