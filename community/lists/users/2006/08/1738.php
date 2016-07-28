<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 10 18:57:28 2006" -->
<!-- isoreceived="20060810225728" -->
<!-- sent="Thu, 10 Aug 2006 15:59:36 -0700" -->
<!-- isosent="20060810225936" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] network preference" -->
<!-- id="44DBBA58.7080302_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44DBB799.9080205_at_Sun.COM" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-10 18:59:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1739.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1737.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<li><strong>In reply to:</strong> <a href="1737.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1736.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Donald Kerr wrote:
<br>
<span class="quotelev1">&gt; Is there a way for the user to silence these types of messages? Maybe a 
</span><br>
<span class="quotelev1">&gt; quiet mode.
</span><br>
<p>A quick glance at the code says no.. but maybe we have a volunteer for 
<br>
adding it.. :)
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Galen M. Shipman wrote On 08/10/06 18:12,:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I think the message was missing from one of the releases but is now  
</span><br>
<span class="quotelev2">&gt;&gt;in the trunk
</span><br>
<span class="quotelev2">&gt;&gt;- Galen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Aug 10, 2006, at 3:44 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Donald Kerr wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hey Andrew I have one for you...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I get the following error message on a node that does not have any  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;IB cards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[0,1,0]: uDAPL on host burl-ct-v40z-0 was unable to find any NICs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;lower performance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;but I don't see this for the openib btl. Why udapl and not openib?  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Am I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;missing something?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Don't think I have enough information.  You have an OpenIB stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt;installed on the system, and the openib BTL is getting loaded?  If
</span><br>
<span class="quotelev3">&gt;&gt;&gt;there's no loadable openib BTL, you wouldn't see this error message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;coming from it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Looking at the code, you should see a similar error from both,  assuming
</span><br>
<span class="quotelev3">&gt;&gt;&gt;both BTLs are present.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Andrew
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-DON
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="1739.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1737.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<li><strong>In reply to:</strong> <a href="1737.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1736.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
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
