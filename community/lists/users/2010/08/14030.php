<?
$subject_val = "Re: [OMPI users] problem with .bashrc stetting of openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 02:04:41 2010" -->
<!-- isoreceived="20100816060441" -->
<!-- sent="Mon, 16 Aug 2010 11:34:17 +0530" -->
<!-- isosent="20100816060417" -->
<!-- name="Manik Mayur" -->
<!-- email="manik.mayur_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with .bashrc stetting of openmpi" -->
<!-- id="AANLkTikWNLg6rA+dd0as4bzDeaA3UZcXgPR9H4mh8rQd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49663.10.209.4.1.1281936503.squirrel_at_www.chem.iitb.ac.in" -->
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
<strong>From:</strong> Manik Mayur (<em>manik.mayur_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 02:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14031.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14029.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14029.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14031.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sunita,
<br>
<p>have you tried running &quot;ldconfig&quot;?
<br>
<p>Manik Mayur
<br>
<p><p><p><p>2010/8/16  &lt;sunita_at_[hidden]&gt;:
<br>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14031.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14029.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>In reply to:</strong> <a href="14029.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14031.php">Addepalli, Srirangam V: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
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
