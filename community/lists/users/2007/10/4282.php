<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 12:46:10 2007" -->
<!-- isoreceived="20071023164610" -->
<!-- sent="Tue, 23 Oct 2007 09:46:06 -0700" -->
<!-- isosent="20071023164606" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI &amp;amp; uDAPL" -->
<!-- id="471E254E.7030009_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200710231026.38119.ttelford.groups_at_gmail.com" -->
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
<strong>Date:</strong> 2007-10-23 12:46:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4283.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Previous message:</strong> <a href="4281.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>In reply to:</strong> <a href="4281.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Troy Telford wrote:
<br>
<span class="quotelev1">&gt; On Monday 22 October 2007, Don Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Couple of things.
</span><br>
<span class="quotelev2">&gt;&gt; With linux I believe you need the interface instance in the 7th field of
</span><br>
<span class="quotelev2">&gt;&gt; the /etc/dat.conf file.
</span><br>
<span class="quotelev2">&gt;&gt;     example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; InfiniHost0 u1.1 nonthreadsafe default /usr/lib64/libdapl.so ri.1.1 &quot; &quot; &quot; &quot;
</span><br>
<span class="quotelev2">&gt;&gt; should be
</span><br>
<span class="quotelev2">&gt;&gt; InfiniHost0 u1.1 nonthreadsafe default /usr/lib64/libdapl.so ri.1.1 &quot;ib0 0
</span><br>
<span class="quotelev2">&gt;&gt; &quot; &quot; &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, I noticed that when I compared it to an OFED install; in this particular 
</span><br>
<span class="quotelev1">&gt; IB stack, the &quot;blank&quot; field goes to the &quot;default&quot; value, so while it looks 
</span><br>
<span class="quotelev1">&gt; like an issue, it isn't.  (On this stack, the blank is equivalent of 
</span><br>
<span class="quotelev1">&gt; having &quot;InfiniHost0 ib1&quot; - and yes, the names aren't what you'd expect, which 
</span><br>
<span class="quotelev1">&gt; makes support even more difficult...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, I did see a problem when running with less than ofed 1.2 which I
</span><br>
<span class="quotelev2">&gt;&gt; did not pursue because v1.2 worked. Last, it appears that you are
</span><br>
<span class="quotelev2">&gt;&gt; running udapl 1.1, I have only ever run on 1.2 so I don't know what to
</span><br>
<span class="quotelev2">&gt;&gt; expect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're 100% correct that it is uDAPL 1.1.  If you've only used 1.2 (and hence, 
</span><br>
<span class="quotelev1">&gt; coded/tested for uDAPL 1.2), then I wouldn't be suprised if that's the reason 
</span><br>
<span class="quotelev1">&gt; why it isn't working.
</span><br>
<p>Actually I'm not really convinced this is the reason.  The error you've 
<br>
given occurs very early, in fact it's the first interface-specific DAT 
<br>
function call.  A quick look at the v1.2 spec indicates nothing relevant 
<br>
changed between v1.1 and v1.2.
<br>
<p>As the error message indicates this usually means something isn't right 
<br>
with your uDAPL installation, but the fact that Intel MPI works is kind 
<br>
of strange -- are you sure it was using uDAPL?  Unfortunately at this 
<br>
point I'm not sure what to suggest to try.
<br>
<p>Also does Don's test code that you tried call dat_ia_open()?  If not, 
<br>
then it wouldn't reproduce the error you're getting.
<br>
<p>Which uDAPL implementation are you using?  I originally started 
<br>
developing the uDAPL BTL using Myricom's implementation for GM, but 
<br>
abandoned it because it was far too broken to use.
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MVAPICH2's uDAPL support is 1.2 or greater, so I wouldn't be suprised if the 
</span><br>
<span class="quotelev1">&gt; story is similar for Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd add that it may be useful to others to mention what version(s) of uDAPL 
</span><br>
<span class="quotelev1">&gt; work with Open MPI in the documentation or FAQ.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4283.php">Murat Knecht: "Re: [OMPI users] 100% CPU load without sm-btl"</a>
<li><strong>Previous message:</strong> <a href="4281.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
<li><strong>In reply to:</strong> <a href="4281.php">Troy Telford: "Re: [OMPI users] OMPI &amp; uDAPL"</a>
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
