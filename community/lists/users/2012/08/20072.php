<?
$subject_val = "[OMPI users] valgrind/memory leaks from spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 14:15:05 2012" -->
<!-- isoreceived="20120830181505" -->
<!-- sent="Thu, 30 Aug 2012 11:15:00 -0700" -->
<!-- isosent="20120830181500" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="[OMPI users] valgrind/memory leaks from spawn" -->
<!-- id="CANjXV68bjFLPKHxgGKCdnYPNgP4k+=ywW8aQ9EQ+j1nAa0o8xw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] valgrind/memory leaks from spawn<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 14:15:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20073.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 and libnuma"</a>
<li><strong>Previous message:</strong> <a href="20071.php">Dmitry N. Mikushin: "Re: [OMPI users] fork in Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I'm writing a program which will start in a single process.  This
<br>
program will call init (THREAD_MULTIPLE), and finalize.  In between,
<br>
it will call spawn an unknown number of times (think of the program as
<br>
a daemon that launches jobs over and over again).
<br>
<p>I'm running a simple example right now, and I'm seeing that the more
<br>
times I spawn, the more memory I am leaking.  Since I would ideally
<br>
have my daemon run indefinitely, a true resource leak is a big deal
<br>
for me.
<br>
<p>Using valgrind and gdb, I've been tracing into the code.  It appears
<br>
that some of the leaks are on purpose (comments say that the memory
<br>
should never be freed).  As long as those are one-offs, it's not
<br>
really a leak, so no problems there. On the other hand, I think I've
<br>
identified some real leaks.  Many of the allocations will increase by
<br>
a factor directly proportional to the number of spawns that I call.
<br>
<p>One example that is easy enough for me to wrap my head around is that in
<br>
orte_grpcomm_base_update_modex_entries(), there is a call made to
<br>
modex_lookup_orte_proc that will call the OBJ_NEW() macro.  The object
<br>
is inserted into a hash table, and it appears that the entry is never
<br>
cleared from the hash table.
<br>
<p>I'm not 100% certain that the leaks are not due to my (potential)
<br>
misuse of spawn.  Upon Finalize(), I get no reports of leaked handles,
<br>
but I'm unsure if that means I've released everything that I need to
<br>
release on my side.  Is there anything that typically needs to be
<br>
paired with a spawn to clean up resources?
<br>
<p>In my simple example, the leak is just under 4K bytes per spawn.  This
<br>
isn't huge, and the chances that the program will run long enough at
<br>
any time to go into the gigabytes is not super high; however, I'd
<br>
still feel better if this could be eliminated.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20073.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 and libnuma"</a>
<li><strong>Previous message:</strong> <a href="20071.php">Dmitry N. Mikushin: "Re: [OMPI users] fork in Fortran"</a>
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
