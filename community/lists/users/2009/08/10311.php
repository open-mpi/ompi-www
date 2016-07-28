<?
$subject_val = "Re: [OMPI users] tcp connectivity OS X and 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 18:38:32 2009" -->
<!-- isoreceived="20090811223832" -->
<!-- sent="Tue, 11 Aug 2009 16:38:17 -0600" -->
<!-- isosent="20090811223817" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp connectivity OS X and 1.3.3" -->
<!-- id="E5C608E7-3A26-4305-8FC3-23101CD353FC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="612D4935-B6D3-4717-9F29-FFF595A423B0_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp connectivity OS X and 1.3.3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 18:38:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10312.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10310.php">Gus Correa: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10312.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't speak to the tcp problem, but the following:
<br>
<p><span class="quotelev1">&gt; [xserve02.local:43625] [[28627,0],2] orte:daemon:send_relay -  
</span><br>
<span class="quotelev1">&gt; recipient list is empty!
</span><br>
<p>is not an error message. It is perfectly normal operation.
<br>
<p>Ralph
<br>
<p><p>On Aug 11, 2009, at 1:54 PM, Jody Klymak wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2009, at  8:15 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can turn off those mca params I gave you as you are now past  
</span><br>
<span class="quotelev2">&gt;&gt; that point. I know there are others that can help debug that TCP  
</span><br>
<span class="quotelev2">&gt;&gt; btl error, but they can help you there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to eliminate the mitgcm from the debugging I compiled example/ 
</span><br>
<span class="quotelev1">&gt; hello_c.c and run as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host xserve01  
</span><br>
<span class="quotelev1">&gt; hello_c &gt;&amp; hello_c4_1host.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no ostensible problem.  If I run as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host  
</span><br>
<span class="quotelev1">&gt; xserve01,xserve02 hello_c &gt;&amp; hello_c4_2host.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The process says Hello, but hangs at the end, and needs to be killed  
</span><br>
<span class="quotelev1">&gt; with ^C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then modified connectivity_c to include a printf as MPI is  
</span><br>
<span class="quotelev1">&gt; initialized, and hardwired verbose=1.  This completes, and appears  
</span><br>
<span class="quotelev1">&gt; to work fine..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host xserve01  
</span><br>
<span class="quotelev1">&gt; connectivity_c &gt;&amp; connectivity_c8_1host.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, again, two hosts sours the mix:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/bin/mpirun --debug-daemons -n 8 -host  
</span><br>
<span class="quotelev1">&gt; xserve01,xserve02 connectivity_c &gt;&amp; connectivity_c8_2host.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This hangs, and after waiting a minute or so we see that rank 0--4  
</span><br>
<span class="quotelev1">&gt; on xserve01 cannot contact rank 5 (presumably on xserve02).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that I have something wrong in my tcp setup, but  
</span><br>
<span class="quotelev1">&gt; communication between these servers worked yesterday using 1.1.5,  
</span><br>
<span class="quotelev1">&gt; and ping etc all work fine, so something else is up.  Some sort of  
</span><br>
<span class="quotelev1">&gt; port permissions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Th most glaring error I see in these is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [xserve02.local:43625] [[28627,0],2] orte:daemon:send_relay -  
</span><br>
<span class="quotelev1">&gt; recipient list is empty!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see reference in the archives to a similar error where  
</span><br>
<span class="quotelev1">&gt; &quot;contacts.txt&quot; could not be found.  I've had trouble with 10.5.7  
</span><br>
<span class="quotelev1">&gt; with temporary directories, so maybe that is the issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;hello_c8_1host.txt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;hello_c8_2host.txt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;connectivity_c8_1host.txt&gt;
</span><br>
<span class="quotelev1">&gt; &lt;connectivity_c8_2host.txt&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jody Klymak
</span><br>
<span class="quotelev1">&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10311/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10312.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10310.php">Gus Correa: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10312.php">Gus Correa: "Re: [OMPI users] tcp connectivity OS X and 1.3.3"</a>
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
