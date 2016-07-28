<?
$subject_val = "Re: [OMPI users] problem with .bashrc stetting of openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 02:39:14 2010" -->
<!-- isoreceived="20100816063914" -->
<!-- sent="Mon, 16 Aug 2010 11:54:57 +0530 (IST)" -->
<!-- isosent="20100816062457" -->
<!-- name="sunita_at_[hidden]" -->
<!-- email="sunita_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with .bashrc stetting of openmpi" -->
<!-- id="49136.10.209.4.1.1281939897.squirrel_at_www.chem.iitb.ac.in" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA9640E5ADCA30D0_at_CRATUS.ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with .bashrc stetting of openmpi<br>
<strong>From:</strong> <a href="mailto:sunita_at_[hidden]?Subject=Re:%20[OMPI%20users]%20problem%20with%20.bashrc%20stetting%20of%20openmpi"><em>sunita_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-08-16 02:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14034.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14032.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14031.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14034.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14034.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hello Sunitha,
</span><br>
<span class="quotelev1">&gt; If you have admin privileges on this system add library path to
</span><br>
<span class="quotelev1">&gt;  /etc/ld.so.conf
</span><br>
I don't have admin privileges.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eg: echo &quot;/home/sunitap/soft/openmpi/lib&quot; &gt;&gt; /etc/ld.so.conf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldconfig
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rangam
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt; sunita_at_[hidden] [sunita_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 16, 2010 12:28 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] problem with .bashrc stetting of openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hello Sunita,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what linux distribution is this?
</span><br>
<span class="quotelev1">&gt; The linux distribution is Red Hat Enterprise Linux Server release 5.5
</span><br>
<span class="quotelev1">&gt; (Tikanga)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Aug 13, 2010 at 1:57 AM, &lt;sunita_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sunita
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open-mpi users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed openmpi-1.4.1 in my user area and then set the path for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi in the .bashrc file as follow. However, am still getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error message whenever am starting the parallel molecular dynamics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simulation using GROMACS. So every time am starting the MD job, I need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source the .bashrc file again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Earlier in some other machine I did the same thing and was not getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you guys suggest what would be the problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============.bashrc============
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #path for openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PATH=$PATH:/home/sunitap/soft/openmpi/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export CFLAGS=&quot;-I/home/sunitap/soft/openmpi/include&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LDFLAGS=&quot;-L/home/sunitap/soft/openmpi/lib&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LD_LIBRARY_PATH=/home/sunitap/soft/openmpi/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============== error message ==============
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mdrun_mpi: error while loading shared libraries: libmpi.so.0: cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sunita
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14034.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14032.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14031.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14034.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Reply:</strong> <a href="14034.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
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
