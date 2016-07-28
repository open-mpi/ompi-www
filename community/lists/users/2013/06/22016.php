<?
$subject_val = "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  3 23:26:13 2013" -->
<!-- isoreceived="20130604032613" -->
<!-- sent="Tue, 4 Jun 2013 11:26:09 +0800" -->
<!-- isosent="20130604032609" -->
<!-- name="vacate" -->
<!-- email="vacatehoping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] I got &amp;quot;ssh_exchange_identification&amp;quot; errors when I mpirun over 1500 times almost at the same time" -->
<!-- id="CANxn1WXrBH83d6gFY5ujJDBnSbVjwQ8HFE8LTp1jKzFjt6z4sQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="934D0F9D-C04C-4E35-B6ED-6E4A653465B7_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-06-03 23:26:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22017.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Previous message:</strong> <a href="22015.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>In reply to:</strong> <a href="22010.php">Ralph Castain: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22011.php">Sabuj Pattanayek: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph Castain,
<br>
<p>Thank you for you reply!!!
<br>
<p>Actually, I have adjusted my /etc/security/limits.conf file,
<br>
I modified the &quot;soft nofile&quot; and &quot;hard nofile&quot; values up to 65535, so these
<br>
days I tried another possible limits settings
<br>
another settings include &quot;soft memlock&quot; ,&quot;hard memlock&quot;, and
<br>
/proc/sys/fs/file-max file.
<br>
it still didn't work...
<br>
<p>But at the last, I think my &quot;soft nofile&quot; and &quot;hard nofile&quot; values may be
<br>
not large enough.
<br>
After I arise those value, it works finally !!!!!!  lol
<br>
<p>Thank you for your suggestion again!!! It's very useful!!! :))))
<br>
<p><p><p>On Sun, Jun 2, 2013 at 10:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I would suspect you are hitting limits on the number of open sockets -
</span><br>
<span class="quotelev1">&gt; check your limits settings on file descriptors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2013, at 11:43 AM, vacate &lt;vacatehoping_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; I can't do *mpirun* over 1500 times almost at the same time.
</span><br>
<span class="quotelev1">&gt; (but it's always okay less than 1000 times)
</span><br>
<span class="quotelev1">&gt; I got many &quot;*ssh_exchange_identification: connection closed by remote host
</span><br>
<span class="quotelev1">&gt; *&quot; errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; My Open MPI version : 1.6.2
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;           if(rank == 0){      for(i=0 ; i&lt;65535 ; i++)    temp = i/(i+1);
</span><br>
<span class="quotelev1">&gt;  }
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
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22016/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22017.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Previous message:</strong> <a href="22015.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<li><strong>In reply to:</strong> <a href="22010.php">Ralph Castain: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22011.php">Sabuj Pattanayek: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
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
