<?
$subject_val = "Re: [OMPI users] include port 80 in the hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 25 04:59:53 2008" -->
<!-- isoreceived="20080525085953" -->
<!-- sent="Sun, 25 May 2008 10:59:36 +0200" -->
<!-- isosent="20080525085936" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] include port 80 in the hostfile" -->
<!-- id="20080525085936.GY14055_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="b05971d10805242059x45a73c69x4e24de4ce1295ca9_at_mail.gmail.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-25 04:59:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5732.php">Cally K: "Re: [OMPI users] include port 80 in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="5730.php">Cally K: "[OMPI users] include port 80 in the hostfile"</a>
<li><strong>In reply to:</strong> <a href="5730.php">Cally K: "[OMPI users] include port 80 in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5732.php">Cally K: "Re: [OMPI users] include port 80 in the hostfile"</a>
<li><strong>Reply:</strong> <a href="5732.php">Cally K: "Re: [OMPI users] include port 80 in the hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, May 25, 2008 at 11:59:04AM +0800, Cally K wrote:
<br>
<p><span class="quotelev1">&gt; Is there a way to include an IP address with a different port in the openmpi
</span><br>
<span class="quotelev1">&gt; hostfile, I keep getting error.. the pc sits on a different port, port 80
</span><br>
<span class="quotelev1">&gt; whereas the others sit in port 22, how do I do that.
</span><br>
<p>No host sits on a special port. Hosts have IP addresses, whereas ports
<br>
address a program (service) on a host (ports are the address information
<br>
for the application layer).
<br>
<p>What you probably mean is: On one of your hosts, sshd is running on
<br>
port 80 instead of 22.
<br>
<p>You can simply solve this problem by placing the appropriate port
<br>
configuration in your .ssh/config file on the connecting host:
<br>
<p>Host = some.host.name
<br>
Port = 80
<br>
<p>This allows you to say &quot;ssh some.host.name&quot; instead of &quot;ssh -p 80
<br>
some.host.name&quot;
<br>
<p>So there's no need to specify the remote ssh port in the hostfile.
<br>
<p><p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5732.php">Cally K: "Re: [OMPI users] include port 80 in the hostfile"</a>
<li><strong>Previous message:</strong> <a href="5730.php">Cally K: "[OMPI users] include port 80 in the hostfile"</a>
<li><strong>In reply to:</strong> <a href="5730.php">Cally K: "[OMPI users] include port 80 in the hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5732.php">Cally K: "Re: [OMPI users] include port 80 in the hostfile"</a>
<li><strong>Reply:</strong> <a href="5732.php">Cally K: "Re: [OMPI users] include port 80 in the hostfile"</a>
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
