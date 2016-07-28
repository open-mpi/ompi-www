<?
$subject_val = "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 12:39:26 2012" -->
<!-- isoreceived="20120425163926" -->
<!-- sent="Wed, 25 Apr 2012 10:39:20 -0600" -->
<!-- isosent="20120425163920" -->
<!-- name="Kyle Boe" -->
<!-- email="boex0040_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines" -->
<!-- id="CA+vDB+OeXab3VS-SwVaaKKK2guuX-ArYmQeyZsafk0X+8em4mA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+vDB+OODHxMhEaqj1=332b-EoR5hgjA1OfEQ3vLS=UGfu6ckg_at_mail.gmail.com" -->
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
<strong>From:</strong> Kyle Boe (<em>boex0040_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 12:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19137.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Previous message:</strong> <a href="19135.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19134.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19138.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19138.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;I just re-read the thread. I think there's a little confusion between the
</span><br>
terms &quot;processor&quot; and &quot;MPI process&quot; here. You said &quot;As a pre-processing
<br>
step, each processor must figure out which other processors it must
<br>
communicate with by virtue of sharing neighboring grid points.&quot; Did you
<br>
mean &quot;MPI process&quot; instead of &quot;processor&quot;?
<br>
<p>The code is designed to be run using only one MPI process per
<br>
core/slot/whatever word you want to use. I believe what is happening here
<br>
is that OMPI is launching all MPI processes on a single slot. This is why
<br>
my code is freaking out and telling me that a slot is asking for
<br>
information it already owns. So, in order to answer your second point:
<br>
<p><span class="quotelev1">&gt;Secondly, if you're just running on a single machine with no scheduler and
</span><br>
no hostile, you should be able to: mpirun -np &lt;whatever_you_want&gt;
<br>
your_program_name When you get the &quot;There are not enough slots available in
<br>
the system...&quot; message, that usually means that *something* is telling Open
<br>
MPI a maximum number of processes that can be run, and your -np value is
<br>
greater than that. This is *usually* a scheduler, but can also be a hostile
<br>
and/or an environment variable or file-based MCA parameter.
<br>
I wanted to force MPI to only assign a single process per each slot, so I
<br>
used the -nooversubscribe option. This is when I get the error about there
<br>
not being enough slots in the system to fulfill my request. I can use
<br>
mpirun with np set to whatever I want and it will launch succesfully, but
<br>
then my code kills itself because the processes are being oversubscribed to
<br>
a single slot, which doesn't do me or my code any good at all.
<br>
<p>So the problem is that even though I have 8, 24, and 48 core machines, OMPI
<br>
thinks each one of them only has a single core, and will launch all MPI
<br>
processes on that one core.
<br>
<p>Kyle
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19136/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19137.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Previous message:</strong> <a href="19135.php">Jeff Squyres: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>In reply to:</strong> <a href="19134.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19138.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<li><strong>Reply:</strong> <a href="19138.php">Ralph Castain: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
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
