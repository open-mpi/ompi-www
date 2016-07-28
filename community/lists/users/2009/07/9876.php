<?
$subject_val = "Re: [OMPI users] quadrics support?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 17:18:36 2009" -->
<!-- isoreceived="20090707211836" -->
<!-- sent="Tue, 7 Jul 2009 17:18:31 -0400" -->
<!-- isosent="20090707211831" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] quadrics support?" -->
<!-- id="e75d22a90907071418r5a94b8bfo33f031a4d501919f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e75d22a90907071230xc4a14bp77379d3cbb5d67f7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] quadrics support?<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 17:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9877.php">rahmani: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Previous message:</strong> <a href="9875.php">Reuti: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>In reply to:</strong> <a href="9873.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9882.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9882.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So, first run i seem to have run into a bit of an issue.  All the
<br>
Quadrics modules are compiled and loaded.  I can ping between nodes
<br>
over the quadrics interfaces.  But when i try to run one of the hello
<br>
mpi example from openmpi, i get:
<br>
<p>first run, the process hung - killed with ctl-c
<br>
though it doesnt seem to actually die and kill -9 doesn't work
<br>
<p>second run, the process fails with
<br>
&nbsp;&nbsp;failed elan4_attach &lt;snipped&gt; Device or resource busy
<br>
&nbsp;&nbsp;&lt;snipped&gt;
<br>
&nbsp;&nbsp;elan_allocSleepDesc &lt;snipped&gt; Failed to allocate IRQ cookie 2a: 22
<br>
Invalid argument
<br>
all subsequent runs fail the same way and i have to reboot the box to
<br>
get the processes to go away
<br>
<p>I'm not sure if this is a quadrics or openmpi issue at this point, but
<br>
i figured since there are quadrics people on the list its a good place
<br>
to start
<br>
<p>On Tue, Jul 7, 2009 at 3:30 PM, Michael Di
<br>
Domenico&lt;mdidomenico4_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Does OpenMPI/Quadrics require the Quadrics Kernel patches in order to
</span><br>
<span class="quotelev1">&gt; operate?  Or operate at full speed or are the Quadrics modules
</span><br>
<span class="quotelev1">&gt; sufficient?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 2, 2009 at 1:52 PM, Ashley Pittman&lt;ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2009-07-02 at 09:34 -0400, Michael Di Domenico wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, thanks.  I'll give it a shot and report back.  I can't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contribute any code, but I can certainly do testing...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm from the Quadrics stable so could certainty support a port should
</span><br>
<span class="quotelev2">&gt;&gt; you require it but I don't have access to hardware either currently.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9877.php">rahmani: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Previous message:</strong> <a href="9875.php">Reuti: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>In reply to:</strong> <a href="9873.php">Michael Di Domenico: "Re: [OMPI users] quadrics support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9882.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
<li><strong>Reply:</strong> <a href="9882.php">Ashley Pittman: "Re: [OMPI users] quadrics support?"</a>
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
