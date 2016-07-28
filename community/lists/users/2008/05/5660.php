<?
$subject_val = "Re: [OMPI users] Help configuring openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 15:05:40 2008" -->
<!-- isoreceived="20080513190540" -->
<!-- sent="Tue, 13 May 2008 21:15:19 +0200" -->
<!-- isosent="20080513191519" -->
<!-- name="Juan Carlos Larroya Huguet" -->
<!-- email="JC.LARROYA_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help configuring openmpi" -->
<!-- id="4829E8C7.3060002_at_wanadoo.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="764916AB-7A96-4A96-B211-D8263F424A04_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help configuring openmpi<br>
<strong>From:</strong> Juan Carlos Larroya Huguet (<em>JC.LARROYA_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 15:15:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5661.php">Tamer: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5659.php">Rob Malpass: "[OMPI users] Migrating from lam-mpi"</a>
<li><strong>In reply to:</strong> <a href="5657.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5662.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>Reply:</strong> <a href="5662.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks very much Jeff, you solved my problem. The new CPU times are correct.
<br>
<p>output.000: temps apres petits calculs =    161.828640937805     
<br>
output.001: temps apres petits calculs =    167.412606000900     
<br>
output.002: temps apres petits calculs =    161.822407007217     
<br>
output.003: temps apres petits calculs =    159.414180994034     
<br>
output.004: temps apres petits calculs =    158.233778953552     
<br>
output.005: temps apres petits calculs =    158.775961160660     
<br>
output.006: temps apres petits calculs =    160.206702947617     
<br>
output.007: temps apres petits calculs =    158.072614192963     
<br>
output.008: temps apres petits calculs =    159.688425064087     
<br>
output.009: temps apres petits calculs =    158.696867942810     
<br>
output.010: temps apres petits calculs =    158.287634849548     
<br>
output.011: temps apres petits calculs =    160.931638002396     
<br>
output.012: temps apres petits calculs =    160.669780969620     
<br>
output.013: temps apres petits calculs =    161.221219062805     
<br>
output.014: temps apres petits calculs =    161.696250915527     
<br>
output.015: temps apres petits calculs =    164.311156034470     
<br>
output.016: temps apres petits calculs =    177.722136020660     
<br>
output.017: temps apres petits calculs =    160.300070047379     
<br>
output.018: temps apres petits calculs =    164.753610849380     
<br>
output.019: temps apres petits calculs =    158.875360965729     
<br>
output.020: temps apres petits calculs =    158.453947067261     
<br>
output.021: temps apres petits calculs =    160.183310031891     
<br>
output.022: temps apres petits calculs =    158.966534852982     
<br>
output.023: temps apres petits calculs =    159.750366926193     
<br>
output.024: temps apres petits calculs =    158.936643123627     
<br>
output.025: temps apres petits calculs =    161.162981987000     
<br>
output.026: temps apres petits calculs =    159.347134828568     
<br>
output.027: temps apres petits calculs =    169.814289808273     
<br>
output.028: temps apres petits calculs =    161.617573976517     
<br>
output.029: temps apres petits calculs =    158.314706087112     
<br>
output.030: temps apres petits calculs =    158.700573205948     
<br>
output.031: temps apres petits calculs =    166.480212926865     
<br>
<p>Thanks again
<br>
<p>JC
<br>
<p>PS: I was working with openmpi 1.2.5, to test  your suggestion I moved 
<br>
to version 1.2.6... I tried to install openmpi in my own path using 
<br>
configure --prefix=my_path but the make install remains sticky to the 
<br>
default path ... /usr/local . I didn't found this problem with the 
<br>
version 1.2.5... To bypass this problem I just modified the 
<br>
ac_default_prefix variable in the configure file to my path... Maybe you 
<br>
can make follows this issue to the right person/mail list...
<br>
<p><p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; If OMPI is spinning consuming 100% of your CPU, it usually means that  
</span><br>
<span class="quotelev1">&gt; some MPI function call is polling waiting for completion.  Given the  
</span><br>
<span class="quotelev1">&gt; pattern you are seeing, I'm wondering if some Open MPI collective call  
</span><br>
<span class="quotelev1">&gt; is not finishing until you re-enter the MPI progression engine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, is your pattern like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - some MPI collective function
</span><br>
<span class="quotelev1">&gt; - enter a long period of computation involving no MPI calls
</span><br>
<span class="quotelev1">&gt; - call another MPI function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, you could well be getting bitten by what is known as an &quot;early  
</span><br>
<span class="quotelev1">&gt; completion&quot; optimization in the Open MPI v1.2 series that allows us to  
</span><br>
<span class="quotelev1">&gt; lower our latency slightly in some cases.  In OMPI v1.2.6, we added an  
</span><br>
<span class="quotelev1">&gt; MCA parameter to disable this behavior: set then  
</span><br>
<span class="quotelev1">&gt; pml_ob1_use_early_completion MCA parameter to 0 and try your app again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This parameter is unnecessary in the [upcoming] v1.3 series; we  
</span><br>
<span class="quotelev1">&gt; changed how completions are done such that this should not be an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 12, 2008, at 9:52 AM, Juan Carlos Larroya Huguet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using Openmpi in a linux cluster (itanium 64, intel compilers, 8
</span><br>
<span class="quotelev2">&gt;&gt; processors (4 dual) by node) in which openmpi is not the default ( I
</span><br>
<span class="quotelev2">&gt;&gt; mean supported) MPI-II implementation. Openmpi has been installed  
</span><br>
<span class="quotelev2">&gt;&gt; easily
</span><br>
<span class="quotelev2">&gt;&gt; on the cluster but I think there is a problem with the configuration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using two mpi codes : The first is a CFD code with a master/slave
</span><br>
<span class="quotelev2">&gt;&gt; structure... I have done some calculations on 128 proc's... 1 master
</span><br>
<span class="quotelev2">&gt;&gt; process and 127 slaves.  Openmpi  is slightly more efficient  than the
</span><br>
<span class="quotelev2">&gt;&gt; supported MPI-II version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then I've moved to a second solver (radiant heat transfer ) ... In  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; case, all the processors are doing the same thing. I have found that
</span><br>
<span class="quotelev2">&gt;&gt; after the initial phase of data reading some processors start to work
</span><br>
<span class="quotelev2">&gt;&gt; hard and the others (even consuming 99 of CPU) are waiting for
</span><br>
<span class="quotelev2">&gt;&gt; something!  In fact I have 15 processes over 32 which are working (all
</span><br>
<span class="quotelev2">&gt;&gt; the processes are consuming 99% of CPU...) then as soon as they finish
</span><br>
<span class="quotelev2">&gt;&gt; the calculation the other processes start to do the job (in fact 12
</span><br>
<span class="quotelev2">&gt;&gt; processes) and then when these 12 start to finish the remaining 4 do  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; job....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When looking to the computational time, I obtain that with the MPI-II
</span><br>
<span class="quotelev2">&gt;&gt; official version on the cluster...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; output.000: temps apres petits calculs =    170.445202827454
</span><br>
<span class="quotelev2">&gt;&gt; output.001: temps apres petits calculs =    170.657078027725
</span><br>
<span class="quotelev2">&gt;&gt; output.002: temps apres petits calculs =    168.880963802338
</span><br>
<span class="quotelev2">&gt;&gt; output.003: temps apres petits calculs =    172.611718893051
</span><br>
<span class="quotelev2">&gt;&gt; output.004: temps apres petits calculs =    169.420207977295
</span><br>
<span class="quotelev2">&gt;&gt; output.005: temps apres petits calculs =    168.880684852600
</span><br>
<span class="quotelev2">&gt;&gt; output.006: temps apres petits calculs =    170.222792863846
</span><br>
<span class="quotelev2">&gt;&gt; output.007: temps apres petits calculs =    172.987339973450
</span><br>
<span class="quotelev2">&gt;&gt; output.008: temps apres petits calculs =    170.321479082108
</span><br>
<span class="quotelev2">&gt;&gt; output.009: temps apres petits calculs =    167.417831182480
</span><br>
<span class="quotelev2">&gt;&gt; output.010: temps apres petits calculs =    170.633100032806
</span><br>
<span class="quotelev2">&gt;&gt; output.011: temps apres petits calculs =    168.988963842392
</span><br>
<span class="quotelev2">&gt;&gt; output.012: temps apres petits calculs =    166.893934011459
</span><br>
<span class="quotelev2">&gt;&gt; output.013: temps apres petits calculs =    169.844722032547
</span><br>
<span class="quotelev2">&gt;&gt; output.014: temps apres petits calculs =    169.541869163513
</span><br>
<span class="quotelev2">&gt;&gt; output.015: temps apres petits calculs =    166.023182868958
</span><br>
<span class="quotelev2">&gt;&gt; output.016: temps apres petits calculs =    166.047858953476
</span><br>
<span class="quotelev2">&gt;&gt; output.017: temps apres petits calculs =    166.298271894455
</span><br>
<span class="quotelev2">&gt;&gt; output.018: temps apres petits calculs =    166.990653991699
</span><br>
<span class="quotelev2">&gt;&gt; output.019: temps apres petits calculs =    170.565690040588
</span><br>
<span class="quotelev2">&gt;&gt; output.020: temps apres petits calculs =    170.455694913864
</span><br>
<span class="quotelev2">&gt;&gt; output.021: temps apres petits calculs =    170.545780897141
</span><br>
<span class="quotelev2">&gt;&gt; output.022: temps apres petits calculs =    165.962821960449
</span><br>
<span class="quotelev2">&gt;&gt; output.023: temps apres petits calculs =    169.934472084045
</span><br>
<span class="quotelev2">&gt;&gt; output.024: temps apres petits calculs =    170.169304847717
</span><br>
<span class="quotelev2">&gt;&gt; output.025: temps apres petits calculs =    172.316897153854
</span><br>
<span class="quotelev2">&gt;&gt; output.026: temps apres petits calculs =    166.030095100403
</span><br>
<span class="quotelev2">&gt;&gt; output.027: temps apres petits calculs =    168.219340801239
</span><br>
<span class="quotelev2">&gt;&gt; output.028: temps apres petits calculs =    165.486129045486
</span><br>
<span class="quotelev2">&gt;&gt; output.029: temps apres petits calculs =    165.923212051392
</span><br>
<span class="quotelev2">&gt;&gt; output.030: temps apres petits calculs =    165.996737957001
</span><br>
<span class="quotelev2">&gt;&gt; output.031: temps apres petits calculs =    167.544650793076
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; all the processes are more or less consuming the same CPU time
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and with Openmpi I've obtained that
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; output.000: temps apres petits calculs =    158.906322956085
</span><br>
<span class="quotelev2">&gt;&gt; output.001: temps apres petits calculs =    160.753660202026
</span><br>
<span class="quotelev2">&gt;&gt; output.002: temps apres petits calculs =    161.286659002304
</span><br>
<span class="quotelev2">&gt;&gt; output.003: temps apres petits calculs =    169.431221961975
</span><br>
<span class="quotelev2">&gt;&gt; output.004: temps apres petits calculs =    163.511161088943
</span><br>
<span class="quotelev2">&gt;&gt; output.005: temps apres petits calculs =    160.547757863998
</span><br>
<span class="quotelev2">&gt;&gt; output.006: temps apres petits calculs =    161.222673892975
</span><br>
<span class="quotelev2">&gt;&gt; output.007: temps apres petits calculs =    325.977787017822
</span><br>
<span class="quotelev2">&gt;&gt; output.008: temps apres petits calculs =    321.527663946152
</span><br>
<span class="quotelev2">&gt;&gt; output.009: temps apres petits calculs =    326.429191827774
</span><br>
<span class="quotelev2">&gt;&gt; output.010: temps apres petits calculs =    321.229686975479
</span><br>
<span class="quotelev2">&gt;&gt; output.011: temps apres petits calculs =    160.507288932800
</span><br>
<span class="quotelev2">&gt;&gt; output.012: temps apres petits calculs =    158.480596065521
</span><br>
<span class="quotelev2">&gt;&gt; output.013: temps apres petits calculs =    169.135869979858
</span><br>
<span class="quotelev2">&gt;&gt; output.014: temps apres petits calculs =    158.526450872421
</span><br>
<span class="quotelev2">&gt;&gt; output.015: temps apres petits calculs =    486.637645006180
</span><br>
<span class="quotelev2">&gt;&gt; output.016: temps apres petits calculs =    483.884088993073
</span><br>
<span class="quotelev2">&gt;&gt; output.017: temps apres petits calculs =    480.200496196747
</span><br>
<span class="quotelev2">&gt;&gt; output.018: temps apres petits calculs =    483.166898012161
</span><br>
<span class="quotelev2">&gt;&gt; output.019: temps apres petits calculs =    323.687628030777
</span><br>
<span class="quotelev2">&gt;&gt; output.020: temps apres petits calculs =    319.833092927933
</span><br>
<span class="quotelev2">&gt;&gt; output.021: temps apres petits calculs =    329.558218955994
</span><br>
<span class="quotelev2">&gt;&gt; output.022: temps apres petits calculs =    329.199027061462
</span><br>
<span class="quotelev2">&gt;&gt; output.023: temps apres petits calculs =    322.116630077362
</span><br>
<span class="quotelev2">&gt;&gt; output.024: temps apres petits calculs =    322.238983869553
</span><br>
<span class="quotelev2">&gt;&gt; output.025: temps apres petits calculs =    322.890433073044
</span><br>
<span class="quotelev2">&gt;&gt; output.026: temps apres petits calculs =    322.439801216125
</span><br>
<span class="quotelev2">&gt;&gt; output.027: temps apres petits calculs =    157.899522066116
</span><br>
<span class="quotelev2">&gt;&gt; output.028: temps apres petits calculs =    159.247365951538
</span><br>
<span class="quotelev2">&gt;&gt; output.029: temps apres petits calculs =    158.351451158524
</span><br>
<span class="quotelev2">&gt;&gt; output.030: temps apres petits calculs =    158.714610815048
</span><br>
<span class="quotelev2">&gt;&gt; output.031: temps apres petits calculs =    480.177379846573
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 15 processes have similar times (close to those obtained with the
</span><br>
<span class="quotelev2">&gt;&gt; official MPI), hen 12, then 4 as explained previously.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suppose that we need to tune the configuration of openmpi. Do you  
</span><br>
<span class="quotelev2">&gt;&gt; know
</span><br>
<span class="quotelev2">&gt;&gt; how to do?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; JC
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
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5661.php">Tamer: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5659.php">Rob Malpass: "[OMPI users] Migrating from lam-mpi"</a>
<li><strong>In reply to:</strong> <a href="5657.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5662.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>Reply:</strong> <a href="5662.php">Jeff Squyres: "Re: [OMPI users] Help configuring openmpi"</a>
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
