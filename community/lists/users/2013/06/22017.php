<?
$subject_val = "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  3 23:33:37 2013" -->
<!-- isoreceived="20130604033337" -->
<!-- sent="Tue, 4 Jun 2013 11:33:33 +0800" -->
<!-- isosent="20130604033333" -->
<!-- name="vacate" -->
<!-- email="vacatehoping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I got &amp;quot;ssh_exchange_identification&amp;quot; errors when I mpirun over 1500 times almost at the same time" -->
<!-- id="CANxn1WWtsvx7hYpuy7oZ57DxwOmvX53kmOGj+fASc+-3k1BY+w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEeMGHuFkaPrYjXLntfopn8-ittULMmHEsi7xD6UNMkTPcBMbw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time<br>
<strong>From:</strong> vacate (<em>vacatehoping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-03 23:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Previous message:</strong> <a href="22016.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>In reply to:</strong> <a href="22011.php">Sabuj Pattanayek: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sabuj Pattanayek,
<br>
<p>After your reply, I try to disable my /etc/hosts.deny,
<br>
but unfortunately, It didn't work still
<br>
<p>But I finally solve my problem,
<br>
The reason is my &quot;soft nofile&quot; and &quot;hard nofile&quot; values aren't set large
<br>
enough,
<br>
so I can't open too much file like that
<br>
<p>Still thanks for your reply!! It make me learn more things :)))
<br>
<p><p><p>On Mon, Jun 3, 2013 at 3:33 AM, Sabuj Pattanayek &lt;sabujp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've seen this problem before, when trying to scp a file from one host
</span><br>
<span class="quotelev1">&gt; to many others. It's some race condition in tcp wrappers. Can you
</span><br>
<span class="quotelev1">&gt; disable /etc/hosts.deny ? If you need to protect SSH or other ports
</span><br>
<span class="quotelev1">&gt; use iptables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jun 1, 2013 at 1:43 PM, vacate &lt;vacatehoping_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello everybody,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm a beginner in Open MPI world.
</span><br>
<span class="quotelev2">&gt; &gt; Maybe it's a simple problem, but I cannot figure out what happen on it...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My situation is
</span><br>
<span class="quotelev2">&gt; &gt; I use 4 hosts totally, and their IP address are static.
</span><br>
<span class="quotelev2">&gt; &gt; I can't do mpirun over 1500 times almost at the same time.
</span><br>
<span class="quotelev2">&gt; &gt; (but it's always okay less than 1000 times)
</span><br>
<span class="quotelev2">&gt; &gt; I got many &quot;ssh_exchange_identification: connection closed by remote
</span><br>
<span class="quotelev1">&gt; host&quot;
</span><br>
<span class="quotelev2">&gt; &gt; errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; My Open MPI version : 1.6.2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; I use a simple bash shell script file to run my Open MPI file(named
</span><br>
<span class="quotelev2">&gt; &gt; openMPI_test)
</span><br>
<span class="quotelev2">&gt; &gt; Here is my script content :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; for (( index=0; index&lt;2000 ; index++))
</span><br>
<span class="quotelev2">&gt; &gt;    do
</span><br>
<span class="quotelev2">&gt; &gt;        (time mpirun --hostfile my_hostfile openMPI_test &amp;) &gt;&gt; file 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt; &gt;    done
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; p.s.1 &quot;my_hostfile&quot; file lists 4 hosts' IP address.
</span><br>
<span class="quotelev2">&gt; &gt; p.s.2 &quot;openMPI_test&quot; file ask each host do the same thing, it means:
</span><br>
<span class="quotelev2">&gt; &gt;           if(rank == 0){      for(i=0 ; i&lt;65535 ; i++)    temp =
</span><br>
<span class="quotelev1">&gt; i/(i+1);  }
</span><br>
<span class="quotelev2">&gt; &gt;           else if(rank == 1){      for(i=0 ; i&lt;65535 ; i++)    temp =
</span><br>
<span class="quotelev2">&gt; &gt; i/(i+1);  }
</span><br>
<span class="quotelev2">&gt; &gt;           else if(rank == 2){      for(i=0 ; i&lt;65535 ; i++)    temp =
</span><br>
<span class="quotelev2">&gt; &gt; i/(i+1);  }
</span><br>
<span class="quotelev2">&gt; &gt;           else if(rank == 3){      for(i=0 ; i&lt;65535 ; i++)    temp =
</span><br>
<span class="quotelev2">&gt; &gt; i/(i+1);  }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At the first, I thought I have some system problems,
</span><br>
<span class="quotelev2">&gt; &gt; so I tried to modify my /etc/ssh/sshd_config file.
</span><br>
<span class="quotelev2">&gt; &gt; I set Max_Sessions up to 65535, and MaxStartups up to 65535,
</span><br>
<span class="quotelev2">&gt; &gt; but the result made me so sad because it still didn't work :((
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure if there are some settings or limits in Open MPI,
</span><br>
<span class="quotelev2">&gt; &gt; or I just have another system problems?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I really hope someone can help me..
</span><br>
<span class="quotelev2">&gt; &gt; Thank you all very very much!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Wishes,
</span><br>
<span class="quotelev2">&gt; &gt; Jen
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22017/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Previous message:</strong> <a href="22016.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>In reply to:</strong> <a href="22011.php">Sabuj Pattanayek: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
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
