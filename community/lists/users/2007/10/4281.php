<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 12:26:46 2007" -->
<!-- isoreceived="20071023162646" -->
<!-- sent="Tue, 23 Oct 2007 10:26:38 -0600" -->
<!-- isosent="20071023162638" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford.groups_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI &amp;amp; uDAPL" -->
<!-- id="200710231026.38119.ttelford.groups_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="471D619C.6020901_at_Sun.COM" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford.groups_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 12:26:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4282.php">Andrew Friedley: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Previous message:</strong> <a href="4280.php">George Bosilca: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>In reply to:</strong> <a href="4273.php">Don Kerr: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4282.php">Andrew Friedley: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Reply:</strong> <a href="4282.php">Andrew Friedley: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday 22 October 2007, Don Kerr wrote:
<br>
<span class="quotelev1">&gt; Couple of things.
</span><br>
<span class="quotelev1">&gt; With linux I believe you need the interface instance in the 7th field of
</span><br>
<span class="quotelev1">&gt; the /etc/dat.conf file.
</span><br>
<span class="quotelev1">&gt;     example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; InfiniHost0 u1.1 nonthreadsafe default /usr/lib64/libdapl.so ri.1.1 &quot; &quot; &quot; &quot;
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt; InfiniHost0 u1.1 nonthreadsafe default /usr/lib64/libdapl.so ri.1.1 &quot;ib0 0
</span><br>
<span class="quotelev1">&gt; &quot; &quot; &quot;
</span><br>
<p>Yeah, I noticed that when I compared it to an OFED install; in this particular 
<br>
IB stack, the &quot;blank&quot; field goes to the &quot;default&quot; value, so while it looks 
<br>
like an issue, it isn't.  (On this stack, the blank is equivalent of 
<br>
having &quot;InfiniHost0 ib1&quot; - and yes, the names aren't what you'd expect, which 
<br>
makes support even more difficult...)
<br>
<p><span class="quotelev1">&gt; Also, I did see a problem when running with less than ofed 1.2 which I
</span><br>
<span class="quotelev1">&gt; did not pursue because v1.2 worked. Last, it appears that you are
</span><br>
<span class="quotelev1">&gt; running udapl 1.1, I have only ever run on 1.2 so I don't know what to
</span><br>
<span class="quotelev1">&gt; expect.
</span><br>
<p>You're 100% correct that it is uDAPL 1.1.  If you've only used 1.2 (and hence, 
<br>
coded/tested for uDAPL 1.2), then I wouldn't be suprised if that's the reason 
<br>
why it isn't working.
<br>
<p>MVAPICH2's uDAPL support is 1.2 or greater, so I wouldn't be suprised if the 
<br>
story is similar for Open MPI.
<br>
<p>I'd add that it may be useful to others to mention what version(s) of uDAPL 
<br>
work with Open MPI in the documentation or FAQ.
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4282.php">Andrew Friedley: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Previous message:</strong> <a href="4280.php">George Bosilca: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>In reply to:</strong> <a href="4273.php">Don Kerr: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4282.php">Andrew Friedley: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>Reply:</strong> <a href="4282.php">Andrew Friedley: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
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
