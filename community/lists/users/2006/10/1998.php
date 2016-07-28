<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 17 15:24:11 2006" -->
<!-- isoreceived="20061017192411" -->
<!-- sent="Tue, 17 Oct 2006 12:24:03 -0700" -->
<!-- isosent="20061017192403" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="[OMPI users] Degraded mode with oversubscription not giving good performance" -->
<!-- id="5b7094580610171224w22e97414jbd93792aed4f05fc_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-17 15:24:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1999.php">Dan Cardin: "[OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Previous message:</strong> <a href="1997.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I'm running my MPI program via open-mpi on a 4 core opteron machine.
<br>
I am trying to run 5 processes where 1 of these processes is simply a
<br>
coordinating process.  It does very little work other than once every
<br>
second or two recieving and sending a short ping to the other
<br>
processes.
<br>
<p>I've seen some of the other threads regarding oversubscription, and I
<br>
read about it in the FAQ.  When I don't set my process to
<br>
yield_when_idle, naturally I get terrible performance because open-mpi
<br>
is using aggressive mode when oversubscribed.
<br>
<p>Finally I was able to get it to sometimes act degraded by using the
<br>
yield_when_idle and by setting the number of slots=4.  However, it
<br>
seems as though this works off and on.  If I run top while running my
<br>
processes sometimes it looks like this:
<br>
<p>11405 budge     39  15  957m 383m 4132 R  100  9.6  83:14.78
<br>
RenderFish
<br>
11406 budge     39  15  959m 386m 4204 R  100  9.6  71:24.22
<br>
RenderFish
<br>
11408 budge     39  15  959m 386m 4200 R  100  9.6  56:12.23
<br>
RenderFish
<br>
11407 budge     39  15  959m 386m 4204 R   50  9.6  46:45.78
<br>
RenderFish
<br>
11409 budge     39  15  959m 386m 4208 R   50  9.6  75:14.43 RenderFish
<br>
<p>and sometimes it looks more like this:
<br>
<p>11323 budge     39  15  959m 386m 4132 R  100  9.6  83:14.78
<br>
RenderFish
<br>
11324 budge     39  15  959m 386m 4204 R  100  9.6  71:24.22
<br>
RenderFish
<br>
11325 budge     39  15  959m 386m 4200 R  100  9.6  83:12.23
<br>
RenderFish
<br>
11326 budge     39  15  959m 386m 4204 R   99  9.6  72:45.78
<br>
RenderFish
<br>
<p>Obviously, the second is better.  I only wish it were the norm.
<br>
<p>&nbsp;I used LAM for a long time and it seems to always have run in
<br>
&quot;degraded&quot; mode, but I have other reasons (better infiniband support)
<br>
that I am switching to open-mpi.
<br>
<p>Does anyone have any idea why open-mpi wouldn't think a process is
<br>
idle 99% of the time when it doesn't do anything 99% of the time?  One
<br>
possible clue is that my program nices itself... does this make a
<br>
difference?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1999.php">Dan Cardin: "[OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<li><strong>Previous message:</strong> <a href="1997.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
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
