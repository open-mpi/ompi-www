<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 14:15:31 2007" -->
<!-- isoreceived="20070717181531" -->
<!-- sent="Tue, 17 Jul 2007 11:15:17 -0700 (PDT)" -->
<!-- isosent="20070717181517" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging followup" -->
<!-- id="289169.78586.qm_at_web57614.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5849f1820707171023x7e05f9c6mbb4724a0fd4ff543_at_mail.gmail.com" -->
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
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 14:15:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3695.php">Michael Edwards: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3693.php">Michael Edwards: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3692.php">G.O.: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3695.php">Michael Edwards: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3695.php">Michael Edwards: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3696.php">G.O.: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the help.  I've replied below.
<br>
<p>--- &quot;G.O.&quot; &lt;gurhan.ozen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;     1- Check to make sure that there are no firewalls blocking
</span><br>
<span class="quotelev1">&gt; traffic between the nodes.
</span><br>
<p>There is no firewall in-between the nodes.  If I run jobs directly via
<br>
ssh, e.g. &quot;ssh node4 env&quot; they work.
<br>
<p><span class="quotelev1">&gt;     2 - Check to make sure that all nodes have the openmpi installed
</span><br>
<span class="quotelev1">&gt; and have the very same executable you are trying to run on the same
</span><br>
<span class="quotelev1">&gt; path, have all permissions correctly.
</span><br>
<p>Yes, they are all installed to /usr/local , the permissions are the
<br>
same, and if I just invoke mpirun on an individual node by logging into
<br>
it, it works.  In fact, even commands like &quot;ssh node4 mpirun&quot; (just to
<br>
get the mpirun help banner) work.
<br>
<p><span class="quotelev1">&gt;     3- Check to make sure that all nodes have the same interface,
</span><br>
<span class="quotelev1">&gt; i.e. eth0 .
</span><br>
<p>They all do have the same interfaces.  In my configureation, eth1 is
<br>
the interface that corresponds to the cluster IP network.  I have tried
<br>
using &quot;--mca btl_tcp_if_include eth1&quot; but it seems to make no
<br>
difference.
<br>
<p><span class="quotelev1">&gt;    That's all i can think of for very quick checks for now. Hope it's
</span><br>
<span class="quotelev1">&gt; one of this.
</span><br>
<p>Thank you very much, but unfortunately it isn't any of these, as far as
<br>
I can tell.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Fussy? Opinionated? Impossible to please? Perfect.  Join Yahoo!'s user panel and lay it on us. <a href="http://surveylink.yahoo.com/gmrs/yahoo_panel_invite.asp?a=7">http://surveylink.yahoo.com/gmrs/yahoo_panel_invite.asp?a=7</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3695.php">Michael Edwards: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3693.php">Michael Edwards: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>In reply to:</strong> <a href="3692.php">G.O.: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3695.php">Michael Edwards: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3695.php">Michael Edwards: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Reply:</strong> <a href="3696.php">G.O.: "Re: [OMPI users] mpirun hanging followup"</a>
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
