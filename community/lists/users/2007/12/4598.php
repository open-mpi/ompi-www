<?
$subject_val = "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 10:30:50 2007" -->
<!-- isoreceived="20071205153050" -->
<!-- sent="Wed, 5 Dec 2007 10:30:46 -0500" -->
<!-- isosent="20071205153046" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)" -->
<!-- id="EE95025E-5E29-479F-8B76-10F1C57D6D79_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2b5e0c120712042250j35c708cfve5095b809ce9399d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 10:30:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4599.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Previous message:</strong> <a href="4597.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4593.php">Brian Dobbins: "[OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4599.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Reply:</strong> <a href="4599.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the problem is that you are only applying the MCA  
<br>
parameters to the first app context instead of all of them:
<br>
<p>&nbsp;&nbsp;shell$ mpiexec -v -d  -machinefile $PBS_NODEFILE -mca  
<br>
oob_tcp_if_exclude eth0 -mca pls_rsh_agent ssh  -np 6 ./hwc.exe : -np  
<br>
2 ./hwc.exe
<br>
<p>The '-mca' parameter will apply the MCA parameter specified only to  
<br>
the app context in which it is specified. In the example you gave  
<br>
(above) it is the first (-np 6 ./hwc.exe) app context that receives  
<br>
these parameters and not the second (-np 2 ./hwc.exe). It is likely  
<br>
that you need these parameters specified for all app contexts.
<br>
<p>There are two main ways of doing this:
<br>
1) The most common ways is to use the '-gmca' parameter which will  
<br>
mark the following MCA parameter as global across all app contexts:
<br>
<p>&nbsp;&nbsp;shell$ mpiexec -v -d  -machinefile $PBS_NODEFILE -gmca  
<br>
oob_tcp_if_exclude eth0 -gmca pls_rsh_agent ssh  -np 6 ./hwc.exe : - 
<br>
np 2 ./hwc.exe
<br>
<p>2) Alternatively you can duplicate the MCA parameters for each app  
<br>
context:
<br>
<p>&nbsp;&nbsp;shell$ mpiexec -v -d  -machinefile $PBS_NODEFILE -mca  
<br>
oob_tcp_if_exclude eth0 -mca pls_rsh_agent ssh  -np 6 ./hwc.exe : - 
<br>
mca oob_tcp_if_exclude eth0 -mca pls_rsh_agent ssh -np 2 ./hwc.exe
<br>
<p><p>If these MCA parameters are required for every run of Open MPI on  
<br>
your system you may consider putting them in the default MCA file,  
<br>
see point 4 in the following FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p>Taking a look at the FAQ it seems that we do not discuss the  
<br>
difference between -mca and -gmca mpirun/mpiexec/orterun parameters.  
<br>
However, if you do a 'mpiexec --help' they will appear in the help  
<br>
output.
<br>
<p>Hope this helps,
<br>
Josh
<br>
<p><p>On Dec 5, 2007, at 1:50 AM, Brian Dobbins wrote:
<br>
<p><span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I seem to have encountered an error while trying to run an MPMD  
</span><br>
<span class="quotelev1">&gt; executable through Open MPI's '-app' option, and I'm wondering if  
</span><br>
<span class="quotelev1">&gt; anyone else has seen this or can verify this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Backing up to a simple example, running a &quot;hello world&quot; executable  
</span><br>
<span class="quotelev1">&gt; (hwc.exe) works fine when run as:  (using an interactive PBS  
</span><br>
<span class="quotelev1">&gt; session with -l nodes=2:ppn=4)
</span><br>
<span class="quotelev1">&gt;  mpiexec -v -d  -machinefile $PBS_NODEFILE -mca oob_tcp_if_exclude  
</span><br>
<span class="quotelev1">&gt; eth0 -mca pls_rsh_agent ssh -np 8 ./hwc.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I run what should be the same thing via an '--app' file  
</span><br>
<span class="quotelev1">&gt; (or implied command line) liks the following fails:
</span><br>
<span class="quotelev1">&gt;  mpiexec -v -d  -machinefile $PBS_NODEFILE -mca oob_tcp_if_exclude  
</span><br>
<span class="quotelev1">&gt; eth0 -mca pls_rsh_agent ssh  -np 6 ./hwc.exe : -np 2 ./hwc.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   My understanding is that these are equivalent, no?  But the  
</span><br>
<span class="quotelev1">&gt; latter example fails with multiple &quot;Software caused connection  
</span><br>
<span class="quotelev1">&gt; abort (103)&quot; errors, such as the following:
</span><br>
<span class="quotelev1">&gt; [xxx:13978] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect  
</span><br>
<span class="quotelev1">&gt; to xx.x.2.81:34103 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Any thoughts?  I haven't dug around the source yet since this  
</span><br>
<span class="quotelev1">&gt; could be a weird problem with the system I'm using.  For the  
</span><br>
<span class="quotelev1">&gt; record, this is with OpenMPI 1.2.4 compiled with PGI 7.1-2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   As an aside, the '-app' syntax DOES work fine when all copies are  
</span><br>
<span class="quotelev1">&gt; running on the same node.. for example, having requested 4 CPUs per  
</span><br>
<span class="quotelev1">&gt; node, if I run &quot;-np 2 ./hwc.exe : -np 2 ./hwc.exe&quot;, it works fine.   
</span><br>
<span class="quotelev1">&gt; And I did also try duplicating the mca parameters after the colon  
</span><br>
<span class="quotelev1">&gt; since I figured they might not propagate, thus perhaps it was  
</span><br>
<span class="quotelev1">&gt; trying to use the wrong interface, but that didn't help either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks very much,
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Dobbins
</span><br>
<span class="quotelev1">&gt; Yale University HPC
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
<li><strong>Next message:</strong> <a href="4599.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Previous message:</strong> <a href="4597.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>In reply to:</strong> <a href="4593.php">Brian Dobbins: "[OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4599.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<li><strong>Reply:</strong> <a href="4599.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
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
