<?
$subject_val = "Re: [OMPI users] Error in Binding MPI Process to a socket";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 11:02:06 2011" -->
<!-- isoreceived="20110318150206" -->
<!-- sent="Fri, 18 Mar 2011 06:29:46 -0400" -->
<!-- isosent="20110318102946" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in Binding MPI Process to a socket" -->
<!-- id="4D83341A.4060600_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikF7hdP8bO+hT01q8BVQiwFhY-aJAfUo7=ZA+ud_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error in Binding MPI Process to a socket<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-18 06:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15914.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15912.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>In reply to:</strong> <a href="15901.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15914.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/17/2011 03:31 PM, vaibhav dutt wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply. I tried to execute first a process by using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile hostfile.txt  --slot-list 0:1   -np 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it gives the same as error as mentioned previously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, I created a rankfile with contents&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0=t1.tools.xxx  slot=0:0
</span><br>
<span class="quotelev1">&gt; rank 1=t1.tools.xxx  slot=1:0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the  used command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile hostfile.txt --rankfile my_rankfile.txt   -np 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but ended  up getting same error. Is there any patch that I can 
</span><br>
<span class="quotelev1">&gt; install in my system to make it
</span><br>
<span class="quotelev1">&gt; topology aware?
</span><br>
<span class="quotelev1">&gt;
</span><br>
You may want to check that you have numa turned on.
<br>
<p>If you look in your /etc/grub.conf file does the kernel line have 
<br>
&quot;numa=on&quot; in it.  If not I would suggest making a new boot line and 
<br>
appending numa=on at the end.  That way if the new boot line doesn't 
<br>
work you'll be able to go back to the old one.  Anyway, my boot line 
<br>
that turns on numa looks like the following:
<br>
<p>title Red Hat Enterprise Linux AS-up (2.6.9-67.EL)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root (hd0,0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kernel /vmlinuz-2.6.9-67.EL ro root=LABEL=/ console=tty0 
<br>
console=ttyS0,9600 rhgb quiet numa=on
<br>
<p>And of course once you've saved the changes you'll need to reboot and 
<br>
select the new boot line at the grub menu.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 17, 2011 at 2:05 PM, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The error is telling you that your OS doesn't support queries
</span><br>
<span class="quotelev1">&gt;     telling us what cores are on which sockets, so we can't perform a
</span><br>
<span class="quotelev1">&gt;     &quot;bind to socket&quot; operation. You can probably still &quot;bind to core&quot;,
</span><br>
<span class="quotelev1">&gt;     so if you know what cores are in which sockets, then you could use
</span><br>
<span class="quotelev1">&gt;     the rank_file mapper to assign processes to groups of cores in a
</span><br>
<span class="quotelev1">&gt;     socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It's just that we can't do it automatically because the OS won't
</span><br>
<span class="quotelev1">&gt;     give us the required info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     See &quot;mpirun -h&quot; for more info on slot lists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Mar 17, 2011, at 11:26 AM, vaibhav dutt wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Hi,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I am trying to perform an experiment in which I can spawn 2 MPI
</span><br>
<span class="quotelev1">&gt;     processes, one on each socket in a 4 core node
</span><br>
<span class="quotelev2">&gt;     &gt; having 2 dual cores. I used the option  &quot;bind to socket&quot; which
</span><br>
<span class="quotelev1">&gt;     mpirun for that but I am getting an error like:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; An attempt was made to bind a process to a specific hardware
</span><br>
<span class="quotelev1">&gt;     topology
</span><br>
<span class="quotelev2">&gt;     &gt; mapping (e.g., binding to a socket) but the operating system
</span><br>
<span class="quotelev1">&gt;     does not
</span><br>
<span class="quotelev2">&gt;     &gt; support such topology-aware actions.  Talk to your local system
</span><br>
<span class="quotelev2">&gt;     &gt; administrator to find out if your system can support topology-aware
</span><br>
<span class="quotelev2">&gt;     &gt; functionality (e.g., Linux Kernels newer than v2.6.18).
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Systems that do not support processor topology-aware
</span><br>
<span class="quotelev1">&gt;     functionality cannot
</span><br>
<span class="quotelev2">&gt;     &gt; use &quot;bind to socket&quot; and other related functionality.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Can anybody please tell me what is this error about. Is there
</span><br>
<span class="quotelev1">&gt;     any other option than &quot;bind to socket&quot;
</span><br>
<span class="quotelev2">&gt;     &gt; that I can use.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks.
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15913/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15913/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15914.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15912.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>In reply to:</strong> <a href="15901.php">vaibhav dutt: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15914.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
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
