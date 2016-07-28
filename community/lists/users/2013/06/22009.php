<?
$subject_val = "[OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  1 14:43:36 2013" -->
<!-- isoreceived="20130601184336" -->
<!-- sent="Sun, 2 Jun 2013 02:43:31 +0800" -->
<!-- isosent="20130601184331" -->
<!-- name="vacate" -->
<!-- email="vacatehoping_at_[hidden]" -->
<!-- subject="[OMPI users] I got &amp;quot;ssh_exchange_identification&amp;quot; errors when I mpirun over 1500 times almost at the same time" -->
<!-- id="CANxn1WUL0qj3vdN5u0GO-XwKMgh3=S4+1CyYf_r-7CtwVBZCBA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time<br>
<strong>From:</strong> vacate (<em>vacatehoping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-01 14:43:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22010.php">Ralph Castain: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Previous message:</strong> <a href="22008.php">Jed Brown: "[OMPI users] &quot;C++ compiler absolute&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22010.php">Ralph Castain: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Reply:</strong> <a href="22010.php">Ralph Castain: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Reply:</strong> <a href="22011.php">Sabuj Pattanayek: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody,
<br>
<p>I'm a beginner in Open MPI world.
<br>
Maybe it's a simple problem, but I cannot figure out what happen on it...
<br>
<p>My situation is
<br>
I use 4 hosts totally, and their IP address are static.
<br>
I can't do *mpirun* over 1500 times almost at the same time.
<br>
(but it's always okay less than 1000 times)
<br>
I got many &quot;*ssh_exchange_identification: connection closed by remote host*&quot;
<br>
errors.
<br>
<p>--------------------------------------------------------------------------------------------------------------------------
<br>
My Open MPI version : 1.6.2
<br>
--------------------------------------------------------------------------------------------------------------------------
<br>
I use a simple bash shell script file to run my Open MPI file(named
<br>
openMPI_test)
<br>
Here is my script content :
<br>
<p>for (( index=0; index&lt;2000 ; index++))
<br>
&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(time mpirun --hostfile my_hostfile openMPI_test &amp;) &gt;&gt; file 2&gt;&amp;1
<br>
&nbsp;&nbsp;&nbsp;done
<br>
<p><p>p.s.1 &quot;my_hostfile&quot; file lists 4 hosts' IP address.
<br>
p.s.2 &quot;openMPI_test&quot; file ask each host do the same thing, it means:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(rank == 0){      for(i=0 ; i&lt;65535 ; i++)    temp = i/(i+1);  }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(rank == 1){      for(i=0 ; i&lt;65535 ; i++)    temp =
<br>
i/(i+1);  }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(rank == 2){      for(i=0 ; i&lt;65535 ; i++)    temp =
<br>
i/(i+1);  }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(rank == 3){      for(i=0 ; i&lt;65535 ; i++)    temp =
<br>
i/(i+1);  }
<br>
--------------------------------------------------------------------------------------------------------------------------
<br>
<p>At the first, I thought I have some system problems,
<br>
so I tried to modify my /etc/ssh/sshd_config file.
<br>
I set Max_Sessions up to 65535, and MaxStartups up to 65535,
<br>
but the result made me so sad because it still didn't work :((
<br>
<p>I'm not sure if there are some settings or limits in Open MPI,
<br>
or I just have another system problems?
<br>
<p>I really hope someone can help me..
<br>
Thank you all very very much!!
<br>
<p><p><p>Best Wishes,
<br>
Jen
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22010.php">Ralph Castain: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Previous message:</strong> <a href="22008.php">Jed Brown: "[OMPI users] &quot;C++ compiler absolute&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22010.php">Ralph Castain: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Reply:</strong> <a href="22010.php">Ralph Castain: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>Reply:</strong> <a href="22011.php">Sabuj Pattanayek: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
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
