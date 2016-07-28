<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  4 08:14:46 2006" -->
<!-- isoreceived="20060404121446" -->
<!-- sent="Tue, 4 Apr 2006 14:14:38 +0200" -->
<!-- isosent="20060404121438" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060404121438.GC14520_at_ipc256.inf.uni-jena.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0604041101330.2887_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Christian Kauhaus (<em>ckauhaus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-04 08:14:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0815.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Previous message:</strong> <a href="0813.php">Ralph Castain: "[OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>In reply to:</strong> <a href="0812.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0794.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bogdan Costescu &lt;Bogdan.Costescu_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;The question is then what to do about the names given in the 
</span><br>
<span class="quotelev1">&gt;machinefile ? Should they just be passed to the rsh/ssh client hoping 
</span><br>
<span class="quotelev1">&gt;that they would work ? Should there be an option for resolving the 
</span><br>
<p>Just passing the contents of the machinefile is the way the current code
<br>
works and I think this is the most sensible solution. Any situation where
<br>
there the resolver returns IPv6 addresses, but the installed networking
<br>
software like rsh/ssh is not able to cope with them looks clearly like
<br>
an admin error to me. This is nothing that OpenMPI should try to fix.
<br>
<p>And remember that there is always the -4 switch in ssh. 
<br>
<p>&nbsp;&nbsp;Christian
<br>
<p><pre>
-- 
Dipl.-Inf. Christian Kauhaus                               &lt;&gt;&lt;
Lehrstuhl fuer Rechnerarchitektur und -kommunikation 
Institut fuer Informatik * Ernst-Abbe-Platz 1-2 * D-07743 Jena
Tel: +49 3641 9 46376  *  Fax: +49 3641 9 46372   *  Raum 3217
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0815.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Previous message:</strong> <a href="0813.php">Ralph Castain: "[OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>In reply to:</strong> <a href="0812.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0794.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
