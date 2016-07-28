<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 13:10:22 2007" -->
<!-- isoreceived="20070605171022" -->
<!-- sent="Tue, 5 Jun 2007 19:10:14 +0200" -->
<!-- isosent="20070605171014" -->
<!-- name="Andy Georgi" -->
<!-- email="Andy.Georgi_at_[hidden]" -->
<!-- subject="[OMPI users]  Communication Latency" -->
<!-- id="00c701c7a794$63a821f0$03f41e8d_at_desktop" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Andy Georgi (<em>Andy.Georgi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 13:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3369.php">Lie-Quan Lee: "[OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3367.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI users] Communication Latency"</a>
<li><strong>Reply:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI users] Communication Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi everybody,
<br>
<p>i'm new on this list and started using OpenMPI for my parallel jobs. first step was to measure the latency for blocking communication functions. now my first question: is it possible that ordained communication pairs will be optimized?
<br>
<p>background:
<br>
<p>latency for special processnumbers is nearly 25% smaller, e.g. for process 1,2,4,8,16,32,64... (every computer scientist should see the pattern ;-)). it doesn't matter from which process i send the message if the receiver is one of these processes i have top latency values. it's not possible that this effect comes through the network because communication from proc5 to proc32 e.g. is faster than communication from proc32 to proc5. i've tried it with OpenMPI for Intel 1.1.4 and 1.2.2 and OpenMPI for PGI 1.2.2. always the same results. now i think it must be a kind of optimization. if it's so i would like to know it because then i have an explanation ;-).
<br>
<p>thx and regards,
<br>
<p>andy
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3369.php">Lie-Quan Lee: "[OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3367.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI users] Communication Latency"</a>
<li><strong>Reply:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI users] Communication Latency"</a>
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
