<?
$subject_val = "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  2 15:34:03 2013" -->
<!-- isoreceived="20130602193403" -->
<!-- sent="Sun, 2 Jun 2013 14:33:57 -0500" -->
<!-- isosent="20130602193357" -->
<!-- name="Sabuj Pattanayek" -->
<!-- email="sabujp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I got &amp;quot;ssh_exchange_identification&amp;quot; errors when I mpirun over 1500 times almost at the same time" -->
<!-- id="CAEeMGHuFkaPrYjXLntfopn8-ittULMmHEsi7xD6UNMkTPcBMbw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANxn1WUL0qj3vdN5u0GO-XwKMgh3=S4+1CyYf_r-7CtwVBZCBA_at_mail.gmail.com" -->
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
<strong>From:</strong> Sabuj Pattanayek (<em>sabujp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-02 15:33:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22000.php">Derek Teaney: "[OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<li><strong>Previous message:</strong> <a href="21998.php">Ralph Castain: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>In reply to:</strong> <a href="21997.php">vacate: "[OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22005.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Reply:</strong> <a href="22005.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've seen this problem before, when trying to scp a file from one host
<br>
to many others. It's some race condition in tcp wrappers. Can you
<br>
disable /etc/hosts.deny ? If you need to protect SSH or other ports
<br>
use iptables.
<br>
<p>On Sat, Jun 1, 2013 at 1:43 PM, vacate &lt;vacatehoping_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a beginner in Open MPI world.
</span><br>
<span class="quotelev1">&gt; Maybe it's a simple problem, but I cannot figure out what happen on it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My situation is
</span><br>
<span class="quotelev1">&gt; I use 4 hosts totally, and their IP address are static.
</span><br>
<span class="quotelev1">&gt; I can't do mpirun over 1500 times almost at the same time.
</span><br>
<span class="quotelev1">&gt; (but it's always okay less than 1000 times)
</span><br>
<span class="quotelev1">&gt; I got many &quot;ssh_exchange_identification: connection closed by remote host&quot;
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; My Open MPI version : 1.6.2
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; I use a simple bash shell script file to run my Open MPI file(named
</span><br>
<span class="quotelev1">&gt; openMPI_test)
</span><br>
<span class="quotelev1">&gt; Here is my script content :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for (( index=0; index&lt;2000 ; index++))
</span><br>
<span class="quotelev1">&gt;    do
</span><br>
<span class="quotelev1">&gt;        (time mpirun --hostfile my_hostfile openMPI_test &amp;) &gt;&gt; file 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;    done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; p.s.1 &quot;my_hostfile&quot; file lists 4 hosts' IP address.
</span><br>
<span class="quotelev1">&gt; p.s.2 &quot;openMPI_test&quot; file ask each host do the same thing, it means:
</span><br>
<span class="quotelev1">&gt;           if(rank == 0){      for(i=0 ; i&lt;65535 ; i++)    temp = i/(i+1);  }
</span><br>
<span class="quotelev1">&gt;           else if(rank == 1){      for(i=0 ; i&lt;65535 ; i++)    temp =
</span><br>
<span class="quotelev1">&gt; i/(i+1);  }
</span><br>
<span class="quotelev1">&gt;           else if(rank == 2){      for(i=0 ; i&lt;65535 ; i++)    temp =
</span><br>
<span class="quotelev1">&gt; i/(i+1);  }
</span><br>
<span class="quotelev1">&gt;           else if(rank == 3){      for(i=0 ; i&lt;65535 ; i++)    temp =
</span><br>
<span class="quotelev1">&gt; i/(i+1);  }
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the first, I thought I have some system problems,
</span><br>
<span class="quotelev1">&gt; so I tried to modify my /etc/ssh/sshd_config file.
</span><br>
<span class="quotelev1">&gt; I set Max_Sessions up to 65535, and MaxStartups up to 65535,
</span><br>
<span class="quotelev1">&gt; but the result made me so sad because it still didn't work :((
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if there are some settings or limits in Open MPI,
</span><br>
<span class="quotelev1">&gt; or I just have another system problems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I really hope someone can help me..
</span><br>
<span class="quotelev1">&gt; Thank you all very very much!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Wishes,
</span><br>
<span class="quotelev1">&gt; Jen
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
<li><strong>Next message:</strong> <a href="22000.php">Derek Teaney: "[OMPI users] Symbol _mpi_get_address0dr4_ not found when using OSX + gfortran + mpif90"</a>
<li><strong>Previous message:</strong> <a href="21998.php">Ralph Castain: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>In reply to:</strong> <a href="21997.php">vacate: "[OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22005.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Reply:</strong> <a href="22005.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
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
