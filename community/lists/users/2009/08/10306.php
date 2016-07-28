<?
$subject_val = "[OMPI users] tcp connectivity OS X and 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 15:54:41 2009" -->
<!-- isoreceived="20090811195441" -->
<!-- sent="Tue, 11 Aug 2009 12:54:29 -0700" -->
<!-- isosent="20090811195429" -->
<!-- name="Jody Klymak" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="[OMPI users] tcp connectivity OS X and 1.3.3" -->
<!-- id="612D4935-B6D3-4717-9F29-FFF595A423B0_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0908110815l54139556u256c20a30632ae13_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] tcp connectivity OS X and 1.3.3<br>
<strong>From:</strong> Jody Klymak (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 15:54:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10307.php">Borenstein, Bernard S: "[OMPI users] need help with a code segment"</a>
<li><strong>Previous message:</strong> <a href="10305.php">Gus Correa: "Re: [OMPI users] problem configuring with torque"</a>
<li><strong>In reply to:</strong> <a href="10304.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10311.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10311.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10312.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>On Aug 11, 2009, at  8:15 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; You can turn off those mca params I gave you as you are now past  
</span><br>
<span class="quotelev1">&gt; that point. I know there are others that can help debug that TCP btl  
</span><br>
<span class="quotelev1">&gt; error, but they can help you there.
</span><br>
<p>Just to eliminate the mitgcm from the debugging I compiled example/ 
<br>
hello_c.c and run as:
<br>
<p>&nbsp;&nbsp;/usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host xserve01  
<br>
hello_c &gt;&amp; hello_c4_1host.txt
<br>
<p>There is no ostensible problem.  If I run as:
<br>
<p>/usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host  
<br>
xserve01,xserve02 hello_c &gt;&amp; hello_c4_2host.txt
<br>
<p>The process says Hello, but hangs at the end, and needs to be killed  
<br>
with ^C.
<br>
<p>I then modified connectivity_c to include a printf as MPI is  
<br>
initialized, and hardwired verbose=1.  This completes, and appears to  
<br>
work fine..
<br>
<p>/usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host xserve01  
<br>
connectivity_c &gt;&amp; connectivity_c8_1host.txt
<br>
<p>However, again, two hosts sours the mix:
<br>
<p>/usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host  
<br>
xserve01,xserve02 connectivity_c &gt;&amp; connectivity_c8_2host.txt
<br>
<p>This hangs, and after waiting a minute or so we see that rank 0--4 on  
<br>
xserve01 cannot contact rank 5 (presumably on xserve02).
<br>
<p>It seems that I have something wrong in my tcp setup, but  
<br>
communication between these servers worked yesterday using 1.1.5, and  
<br>
ping etc all work fine, so something else is up.  Some sort of port  
<br>
permissions?
<br>
<p>Th most glaring error I see in these is:
<br>
<p>[xserve02.local:43625] [[28627,0],2] orte:daemon:send_relay -  
<br>
recipient list is empty!
<br>
<p>I see reference in the archives to a similar error where  
<br>
&quot;contacts.txt&quot; could not be found.  I've had trouble with 10.5.7 with  
<br>
temporary directories, so maybe that is the issue?
<br>
<p>Thanks Jody
<br>
<p><p><p><p><pre>
--
Jody Klymak
<a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10306/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10306/02-attachment">attachment</a>
</ul>
<!-- attachment="02-attachment" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10306/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10306/04-attachment">attachment</a>
</ul>
<!-- attachment="04-attachment" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10306/05-attachment">attachment</a>
</ul>
<!-- attachment="05-attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10306/06-attachment">attachment</a>
</ul>
<!-- attachment="06-attachment" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10306/07-attachment">attachment</a>
</ul>
<!-- attachment="07-attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10306/08-attachment">attachment</a>
</ul>
<!-- attachment="08-attachment" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10306/09-attachment">attachment</a>
</ul>
<!-- attachment="09-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10307.php">Borenstein, Bernard S: "[OMPI users] need help with a code segment"</a>
<li><strong>Previous message:</strong> <a href="10305.php">Gus Correa: "Re: [OMPI users] problem configuring with torque"</a>
<li><strong>In reply to:</strong> <a href="10304.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10311.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10311.php">Ralph Castain: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10312.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
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
