<?
$subject_val = "Re: [OMPI users] include port 80 in the hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 25 06:11:39 2008" -->
<!-- isoreceived="20080525101139" -->
<!-- sent="Sun, 25 May 2008 18:11:25 +0800" -->
<!-- isosent="20080525101125" -->
<!-- name="Cally K" -->
<!-- email="kalpana0611_at_[hidden]" -->
<!-- subject="Re: [OMPI users] include port 80 in the hostfile" -->
<!-- id="b05971d10805250311n6becc1f9h823ac88682637aba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080525085936.GY14055_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI users] include port 80 in the hostfile<br>
<strong>From:</strong> Cally K (<em>kalpana0611_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-25 06:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5733.php">Matt Hughes: "[OMPI users] Infinite loop when tcp free list max reached"</a>
<li><strong>Previous message:</strong> <a href="5731.php">Adrian Knoth: "Re: [OMPI users] include port 80 in the hostfile"</a>
<li><strong>In reply to:</strong> <a href="5731.php">Adrian Knoth: "Re: [OMPI users] include port 80 in the hostfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank Adrian, solved it..
<br>
<p>On 5/25/08, Adrian Knoth &lt;adi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, May 25, 2008 at 11:59:04AM +0800, Cally K wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to include an IP address with a different port in the
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev2">&gt; &gt; hostfile, I keep getting error.. the pc sits on a different port, port 80
</span><br>
<span class="quotelev2">&gt; &gt; whereas the others sit in port 22, how do I do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No host sits on a special port. Hosts have IP addresses, whereas ports
</span><br>
<span class="quotelev1">&gt; address a program (service) on a host (ports are the address information
</span><br>
<span class="quotelev1">&gt; for the application layer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What you probably mean is: On one of your hosts, sshd is running on
</span><br>
<span class="quotelev1">&gt; port 80 instead of 22.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can simply solve this problem by placing the appropriate port
</span><br>
<span class="quotelev1">&gt; configuration in your .ssh/config file on the connecting host:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host = some.host.name
</span><br>
<span class="quotelev1">&gt; Port = 80
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This allows you to say &quot;ssh some.host.name&quot; instead of &quot;ssh -p 80
</span><br>
<span class="quotelev1">&gt; some.host.name&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So there's no need to specify the remote ssh port in the hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5732/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5733.php">Matt Hughes: "[OMPI users] Infinite loop when tcp free list max reached"</a>
<li><strong>Previous message:</strong> <a href="5731.php">Adrian Knoth: "Re: [OMPI users] include port 80 in the hostfile"</a>
<li><strong>In reply to:</strong> <a href="5731.php">Adrian Knoth: "Re: [OMPI users] include port 80 in the hostfile"</a>
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
