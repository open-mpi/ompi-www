<?
$subject_val = "Re: [OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 19:01:46 2015" -->
<!-- isoreceived="20151216000146" -->
<!-- sent="Wed, 16 Dec 2015 09:01:38 +0900" -->
<!-- isosent="20151216000138" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??" -->
<!-- id="5670A9E2.50607_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="729761151.2451796.1450188986965.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-15 19:01:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28166.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28164.php">Baban Gaigole: "[OMPI users] openmpi -hostfile/-machinefile option not working"</a>
<li><strong>In reply to:</strong> <a href="28163.php">Kamal Hossain: "[OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kamal,
<br>
<p>that *could* work (and i am not sure anybody did much testing about that)
<br>
<p>as of now, it is required OpenMPI is installed at the same location on 
<br>
all the nodes.
<br>
i suspect it is installed in /.../ompi-x86 on machine A and 
<br>
/.../ompi-x86_64 on machine B
<br>
if i am wrong, a simple workaround (so you can find orted) is to invoke
<br>
mpirun with the full path (e.g. /.../ompi/bin/mpirun) instead of just mpirun
<br>
<p>you might also need to configure ompi with --enable-heterogeneous
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 12/15/2015 11:16 PM, Kamal Hossain wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iam trying to couple two programs running on two different machines 
</span><br>
<span class="quotelev1">&gt; using openMPI. Machine A is a 32-bit machine and machine B is a 64-bit 
</span><br>
<span class="quotelev1">&gt; machine. So, the configuration is like:
</span><br>
<span class="quotelev1">&gt; *IA32 Machine A with 32-bit binary **+****x64 Machine B with 64-bit 
</span><br>
<span class="quotelev1">&gt; binary.*
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; *Does openMPI allow such a communication?*I was able to create 32-bit 
</span><br>
<span class="quotelev1">&gt; and 64-bit binaries on both machines using openMPI. I can also run the 
</span><br>
<span class="quotelev1">&gt; executables on both machines separately. But, if I want to communicate 
</span><br>
<span class="quotelev1">&gt; between two machines, it simply does not work. I receive the below 
</span><br>
<span class="quotelev1">&gt; messages:
</span><br>
<span class="quotelev1">&gt; /bash: orted: command not found/
</span><br>
<span class="quotelev1">&gt; /--------------------------------------------------------------------------/
</span><br>
<span class="quotelev1">&gt; /ORTE was unable to reliably start one or more daemons./
</span><br>
<span class="quotelev1">&gt; /This usually is caused by:/
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; /* not finding the required libraries and/or binaries on/
</span><br>
<span class="quotelev1">&gt; /one or more nodes. Please check your PATH and LD_LIBRARY_PATH/
</span><br>
<span class="quotelev1">&gt; /settings, or configure OMPI with --enable-orterun-prefix-by-default/
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; /* lack of authority to execute on one or more specified nodes./
</span><br>
<span class="quotelev1">&gt; /Please verify your allocation and authorities./
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; /* the inability to write startup files into /tmp 
</span><br>
<span class="quotelev1">&gt; (--tmpdir/orte_tmpdir_base)./
</span><br>
<span class="quotelev1">&gt; /Please check with your sys admin to determine the correct location to 
</span><br>
<span class="quotelev1">&gt; use./
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; /*compilation of the orted with dynamic libraries when static are 
</span><br>
<span class="quotelev1">&gt; required/
</span><br>
<span class="quotelev1">&gt; /(e.g., on Cray). Please check your configure cmd line and consider using/
</span><br>
<span class="quotelev1">&gt; /one of the contrib/platform definitions for your system type./
</span><br>
<span class="quotelev1">&gt; //
</span><br>
<span class="quotelev1">&gt; /* an inability to create a connection back to mpirun due to a/
</span><br>
<span class="quotelev1">&gt; /lack of common network interfaces and/or no route found between/
</span><br>
<span class="quotelev1">&gt; /them. Please check network connectivity (including firewalls/
</span><br>
<span class="quotelev1">&gt; /and network routing requirements)./
</span><br>
<span class="quotelev1">&gt; Thanks a lot in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Kamal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------ Kamal Hossain Home: 0049 (0)9131 9248479 Mob : 0049 
</span><br>
<span class="quotelev1">&gt; (0)179 7005360 ------------ &quot;Never argue with an idiot. They will drag 
</span><br>
<span class="quotelev1">&gt; you down to their level&quot;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28163.php">http://www.open-mpi.org/community/lists/users/2015/12/28163.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28165/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28166.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28164.php">Baban Gaigole: "[OMPI users] openmpi -hostfile/-machinefile option not working"</a>
<li><strong>In reply to:</strong> <a href="28163.php">Kamal Hossain: "[OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??"</a>
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
