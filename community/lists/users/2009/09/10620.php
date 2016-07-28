<?
$subject_val = "[OMPI users] application hangs when checkpointing application";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 08:48:07 2009" -->
<!-- isoreceived="20090911124807" -->
<!-- sent="Fri, 11 Sep 2009 12:48:02 +0000 (GMT)" -->
<!-- isosent="20090911124802" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="[OMPI users] application hangs when checkpointing application" -->
<!-- id="781108.58579.qm_at_web28303.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EFE36892-58A0-4A3F-BD30-6C815317B3D3_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] application hangs when checkpointing application<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 08:48:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10621.php">Ake Sandgren: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Previous message:</strong> <a href="10619.php">Jeff Squyres: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>In reply to:</strong> <a href="10619.php">Jeff Squyres: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10621.php">Ake Sandgren: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everyone,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I wrote a small program with a function to&#160;trigger the checkpointing mechanism as follows:
<br>
&#160;
<br>
############################################
<br>
&#160;
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;signal.h&gt;
<br>
void trigger_checkpoint();
<br>
int main(int argc, char **argv)
<br>
{
<br>
int rank,size;
<br>
MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
<br>
system(&quot;sleep 10&quot;);
<br>
trigger_checkpoint();
<br>
printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
<br>
system(&quot;sleep 10&quot;);
<br>
printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
<br>
system(&quot;sleep 10&quot;);
<br>
printf(&quot;bye \n&quot;);
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
&#160;
<br>
void trigger_checkpoint()
<br>
{
<br>
&#160; printf(&quot;hi\n&quot;);
<br>
&#160; system(&quot;ompi-checkpoint -v `pidof mpirun` &quot;);
<br>
}
<br>
#############################################
<br>
&#160;&#160;&#160;&#160;&#160;&#160; 
<br>
&#160;
<br>
The application works fine on my laptop with ubuntu as the OS. However, when I tried running it on one of the machines at my uni, with suse linux installed, the application hangs as soon as the ompi-checkpoint is triggered. This is what&#160;I get:
<br>
&#160;
<br>
&#160;
<br>
&#160;
<br>
##########################################################
<br>
I am processor no 0 of a total of 1 procs 
<br>
hi
<br>
I am processor no 0 of a total of 1 procs 
<br>
[sun06:15426] orte_checkpoint: Checkpointing...
<br>
[sun06:15426]&#160;&#160;&#160; PID 15411
<br>
[sun06:15426]&#160;&#160;&#160; Connected to Mpirun [[12727,0],0]
<br>
[sun06:15426] orte_checkpoint: notify_hnp: Contact Head Node Process PID 15411
<br>
<p>does anyone has some ideas about this?
<br>
&#160;
<br>
Thank a lot
<br>
&#160;
<br>
Jean.
<br>
<p>&#160;


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10621.php">Ake Sandgren: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Previous message:</strong> <a href="10619.php">Jeff Squyres: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>In reply to:</strong> <a href="10619.php">Jeff Squyres: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10621.php">Ake Sandgren: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
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
