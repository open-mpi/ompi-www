<?
$subject_val = "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 12:51:55 2012" -->
<!-- isoreceived="20120425165155" -->
<!-- sent="Wed, 25 Apr 2012 10:51:47 -0600" -->
<!-- isosent="20120425165147" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines" -->
<!-- id="4EE82019-C058-45F6-9DD7-EF40EBB65911_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+vDB+OeXab3VS-SwVaaKKK2guuX-ArYmQeyZsafk0X+8em4mA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 12:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19139.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19137.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>In reply to:</strong> <a href="19136.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19139.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19139.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds rather bizarre. Do you have lstopo on your machine? Might be useful to see the output of that so we can understand what it thinks the topology is like as this underpins the binding code.
<br>
<p>The -nooversubscribe option is a red herring here - it has nothing to do with the problem, nor will it help.
<br>
<p>FWIW: if you aren't adding --bind-to-core, then OMPI isn't launching your process on any specific core at all - we are simply launching it on the node. It sounds to me like your code is incorrectly identifying &quot;sharing&quot; when a process isn't bound to a specific core.
<br>
<p>On Apr 25, 2012, at 10:39 AM, Kyle Boe wrote:
<br>
<p><span class="quotelev2">&gt; &gt;I just re-read the thread. I think there's a little confusion between the terms &quot;processor&quot; and &quot;MPI process&quot; here. You said &quot;As a pre-processing step, each processor must figure out which other processors it must communicate with by virtue of sharing neighboring grid points.&quot; Did you mean &quot;MPI process&quot; instead of &quot;processor&quot;? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code is designed to be run using only one MPI process per core/slot/whatever word you want to use. I believe what is happening here is that OMPI is launching all MPI processes on a single slot.This is why my code is freaking out and telling me that a slot is asking for information it already owns. So, in order to answer your second point:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Secondly, if you're just running on a single machine with no scheduler and no hostile, you should be able to: mpirun -np &lt;whatever_you_want&gt; your_program_name When you get the &quot;There are not enough slots available in the system...&quot; message, that usually means that *something* is telling Open MPI a maximum number of processes that can be run, and your -np value is greater than that. This is *usually* a scheduler, but can also be a hostile and/or an environment variable or file-based MCA parameter. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wanted to force MPI to only assign a single process per each slot, so I used the -nooversubscribe option. This is when I get the error about there not being enough slots in the system to fulfill my request. I can use mpirun with np set to whatever I want and it will launch succesfully, but then my code kills itself because the processes are being oversubscribed to a single slot, which doesn't do me or my code any good at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the problem is that even though I have 8, 24, and 48 core machines, OMPI thinks each one of them only has a single core, and will launch all MPI processes on that one core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kyle
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19138/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19139.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Previous message:</strong> <a href="19137.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>In reply to:</strong> <a href="19136.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19139.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19139.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
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
