<?
$subject_val = "Re: [OMPI users] sge tight integration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 08:23:48 2012" -->
<!-- isoreceived="20120411122348" -->
<!-- sent="Wed, 11 Apr 2012 06:23:40 -0600" -->
<!-- isosent="20120411122340" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight integration leads to bad allocation" -->
<!-- id="DC928D30-E1A9-434C-8BB7-C0DB9CEBD3FC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8BADDAEA-8531-4D9F-861D-940949F27430_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] sge tight integration leads to bad allocation<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-11 08:23:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18997.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>Previous message:</strong> <a href="18995.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18995.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19057.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="19057.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 11, 2012, at 6:20 AM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 11.04.2012 um 04:26 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you replicate this problem on your machine? Can you try it with 1.5?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No. It's also working fine in 1.5.5 in some tests. I even forced an uneven distribution by limiting the slots setting for some machines in the queue configuration.
</span><br>
<p>Thanks - that confirms what I've been able to test. It sounds like it is something in Eloi's setup, but I can't fathom what it would be - the allocations all look acceptable.
<br>
<p>I'm stumped. :-(
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Afraid I don't have a way to replicate it, and as I said, wouldn't fix it for the 1.4 series anyway. I'm not seeing this problem elsewhere, but I don't generally get an allocation that varies across nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 10, 2012, at 11:57 AM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 10.04.2012 um 16:55 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I haven't tried any of the 1.5 series yet (we have chosen not to use the features releases) but if this is mandatory for you to work on this topic, I will.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This might be of interest to Reuti and you : it seems that we cannot reproduce the problem anymore if we don't provide the &quot;-np N&quot; option on the orterun command line. Of course, we need to launch a few other runs to be really sure because the allocation error was not always observable. Actually, I recently understood (from Reuti) that the tight integration mode would supply every necessary bits to the launcher and thus I removed the '-np N' that was around... Could it be that using the '-np N' while using the sge tight integration mode is pathologic ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, it should work without problem to specify -np. As it didn't hit me in my tests (normally I don't specify -np), I would really be interested in the underlying cause.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Especially as the example in Open MPI's FAQ lists -np to start with GirdEngine integration, it should have hit other users too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: mardi 10 avril 2012 16:43
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] sge tight intregration leads to bad allocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could well be a bug in OMPI - I can take a look, though it may be awhile before I get to it. Have you tried one of the 1.5 series releases?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 10, 2012, at 3:42 AM, Eloi Gaudry wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thx. This is the allocation which is also confirmed by the Open MPI output.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [eg: ] exactly, but not the one used afterwards by openmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - The application was compiled with the same version of Open MPI?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [eg: ] yes, version 1.4.4 for all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - Does the application start something on its own besides the tasks granted by mpiexec/orterun?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [eg: ] no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You want 12 ranks in total, and to barney.fft and carl.fft there are also &quot;-mca orte_ess_num_procs 3 &quot; given in to the qrsh_starter. In total I count only 10 ranks in this example given - 4+4+2 - do you observe the same?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [eg: ] i don't know why the -mca orte_ess_num_procs 3 is added here...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In the &quot;Map generated by mapping policy&quot; output in my last email, I see that 4 processes were started on each node (barney, carl and charlie), but yes, in the ps -elf output, two of them are missing for one node (barney)... sorry about that, a bad copy/paste. Here is the actual output for this node:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2048 ?        Sl     3:33 /opt/sge/bin/lx-amd64/sge_execd
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27502 ?        Sl     0:00  \_ sge_shepherd-1416 -bg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27503 ?        Ss     0:00      \_ /opt/sge/utilbin/lx-amd64/qrsh_starter /opt/sge/default/spool/barney/active_jobs/1416.1/1.barney
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27510 ?        S      0:00          \_ bash -c  PATH=/opt/openmpi-1.4.4/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/opt/openmpi-1.4.4/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;  /opt/openmpi-1.4.4/bin/orted -mca ess env -mca orte_ess_jobid 3800367104 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri &quot;3800367104.0;tcp://192.168.0.20:57233&quot; --mca pls_gridengine_verbose 1 --mca ras_gridengine_show_jobid 1 --mca ras_gridengine_verbose 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27511 ?        S      0:00              \_ /opt/openmpi-1.4.4/bin/orted -mca ess env -mca orte_ess_jobid 3800367104 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri 3800367104.0;tcp://192.168.0.20:57233 --mca pls_gridengine_verbose 1 --mca ras_gridengine_show_jobid 1 --mca ras_gridengine_verbose 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27512 ?        Rl    12:54                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27513 ?        Rl    12:54                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27514 ?        Rl    12:54                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 27515 ?        Rl    12:53                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like Open MPI is doing the right thing, but the applications decided to start in a different allocation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [eg: ] if the &quot;Map generated by mapping policy&quot; is different than the sge allocation, then openmpi is not doing the right thing, don't you think ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does the application use OpenMP in addition or other kinds of threads? The suffix &quot;_mp&quot; in the name &quot;actranpy_mp&quot; makes me suspicious about it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [eg: ] no, the suffix _mp stands for &quot;parallel&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18997.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed &amp;&amp; ompi-migrate"</a>
<li><strong>Previous message:</strong> <a href="18995.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18995.php">Reuti: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19057.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="19057.php">Eloi Gaudry: "Re: [OMPI users] sge tight integration leads to bad allocation"</a>
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
