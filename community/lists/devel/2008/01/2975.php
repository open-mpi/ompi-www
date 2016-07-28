<?
$subject_val = "Re: [OMPI devel] SDP support for OPEN-MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 14 23:14:57 2008" -->
<!-- isoreceived="20080115041457" -->
<!-- sent="Mon, 14 Jan 2008 22:12:34 -0600" -->
<!-- isosent="20080115041234" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SDP support for OPEN-MPI" -->
<!-- id="986DB5E1-412D-4B48-865B-7A8820430FAB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CA4296E7_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SDP support for OPEN-MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-14 23:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2976.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Previous message:</strong> <a href="2974.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>In reply to:</strong> <a href="2968.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2977.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2977.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 13, 2008, at 8:19 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev2">&gt; &gt; What I meant was try to open an SDP socket.  If it fails because SDP
</span><br>
<span class="quotelev2">&gt; &gt; is not supported / available to that peer, then open a regular
</span><br>
<span class="quotelev2">&gt; &gt; socket.  So you should still always have only 1 socket open to a  
</span><br>
<span class="quotelev1">&gt; peer
</span><br>
<span class="quotelev2">&gt; &gt; (not 2).
</span><br>
<span class="quotelev1">&gt; Yes, but since the listener side doesn't know on which socket to  
</span><br>
<span class="quotelev1">&gt; expect
</span><br>
<span class="quotelev1">&gt; a message it will need both sockets to be opened.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah, you meant the listener socket -- not 2 sockets to each peer.  Ok,  
<br>
fair enough.  Opening up one more listener socket in each process is  
<br>
no big deal (IMO).
<br>
<p><span class="quotelev3">&gt; &gt; &gt; If one of the machine is not supporting SDP user will get an  
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well, that's one way to go, but it's certainly less friendly.  It
</span><br>
<span class="quotelev2">&gt; &gt; means that the entire MPI job has to support SDP -- including  
</span><br>
<span class="quotelev1">&gt; mpirun.
</span><br>
<span class="quotelev2">&gt; &gt; What about clusters that do not have IB on the head node?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; They can use OOB over IP sockets and BTL on SDP, it should work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, I'm fine with this -- IIRC, my point was that if SDP is not  
<br>
available (and the user didn't explicitly ask for it), then it should  
<br>
not be an error.
<br>
<p><span class="quotelev4">&gt; &gt; &gt;&gt; Perhaps a more general approach would be to [perhaps  
</span><br>
<span class="quotelev1">&gt; additionally]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; provide an MCA param to allow the user to specify the AF_* value?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (AF_INET_SDP is a standardized value, right?  I.e., will it be  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; same on all Linux variants [and someday Solaris]?)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I didn't find any standard on it, it seems to be &quot;randomly&quot;  
</span><br>
<span class="quotelev1">&gt; selected
</span><br>
<span class="quotelev3">&gt; &gt; &gt; since the originally it was 26 and changed to 27 due to conflict
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; kernel's defines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This might make an even stronger case for having an MCA param for it
</span><br>
<span class="quotelev2">&gt; &gt; -- if the AF_INET_SDP value is so broken that it's effectively  
</span><br>
<span class="quotelev1">&gt; random,
</span><br>
<span class="quotelev2">&gt; &gt; it may be necessary to override it on some platforms (especially in
</span><br>
<span class="quotelev2">&gt; &gt; light of binary OMPI and OFED distributions that may not match).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; If we talking about passing AF_INET_SDP value only then
</span><br>
<span class="quotelev1">&gt; 1. Passing this value as mca parameter will not make any changes to  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; SDP code.
</span><br>
<span class="quotelev1">&gt; 2. Hopefully in the future AF_INET_SDP value can be gotten from the
</span><br>
<span class="quotelev1">&gt; libc,
</span><br>
<span class="quotelev1">&gt; And the value will be configured automatically.
</span><br>
<span class="quotelev1">&gt; 3. If we are talking about AF_INET value in general ( IPv4, IPv6, SDP)
</span><br>
<span class="quotelev1">&gt; Then by making it constant with mca parameter we are limiting  
</span><br>
<span class="quotelev1">&gt; ourselves
</span><br>
<span class="quotelev1">&gt; for one protocol only without being able to failover or using  
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev1">&gt; protocols for different needs ( i.e. SDP for OOB and IPv4 for BTL )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm not sure what you mean.  The AF_INET values for v4 and v6 are  
<br>
constantly compiled into OMPI via whatever values they are in the  
<br>
system header files.  They're standardized values, right?
<br>
<p>My understanding of what you were saying was that AF_INET_SDP is *not*  
<br>
standardized such that it may actually be different values on  
<br>
different systems.  Hence, an MPI app could be otherwise portable but  
<br>
have a wrong value for AF_INET_SDP compiled into its code.
<br>
<p>Are you saying something else?
<br>
<p><span class="quotelev4">&gt; &gt; &gt;&gt; Patrick's got a good point: is there a reason not to do this?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (LD_PRELOAD and the like)  Is it problematic with the remote
</span><br>
<span class="quotelev1">&gt; orted's?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Yes, it's problematic with remote orted's and it not really
</span><br>
<span class="quotelev3">&gt; &gt; &gt; transparent
</span><br>
<span class="quotelev3">&gt; &gt; &gt; as you might think.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Since we can't pass environments' variables to the orted's during
</span><br>
<span class="quotelev3">&gt; &gt; &gt; runtime
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think this depends on your environment.  If you're not using rsh
</span><br>
<span class="quotelev2">&gt; &gt; (which you shouldn't be for a large cluster, which is where SDP  
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev2">&gt; &gt; matter most, right?), the resource manager typically copies the
</span><br>
<span class="quotelev2">&gt; &gt; environment out to the cluster nodes.  So an LD_PRELOAD value should
</span><br>
<span class="quotelev2">&gt; &gt; be set for the orteds as well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I agree that it's problematic for rsh, but that might also be  
</span><br>
<span class="quotelev1">&gt; solvable
</span><br>
<span class="quotelev2">&gt; &gt; (with some limits; there's only so many characters that we can  
</span><br>
<span class="quotelev1">&gt; pass on
</span><br>
<span class="quotelev2">&gt; &gt; the command line -- we did investigate having a wrapper to the orted
</span><br>
<span class="quotelev2">&gt; &gt; at one point to accept environment variables and then launch the
</span><br>
<span class="quotelev2">&gt; &gt; orted, but this was so problematic / klunky that we abandoned the
</span><br>
<span class="quotelev1">&gt; idea).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Using LD_PRELOAD will not allow us to use SDP and IP separately, i.e.
</span><br>
<span class="quotelev1">&gt; SDP for OOB and IP for a BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Why would you want to do that?  I would think that the biggest win  
<br>
here would be SDP for OOB -- the heck with the BTL.  The BTL was just  
<br>
done for completeness (right?); if you have OpenFabrics support, you  
<br>
should be using the verbs BTL.
<br>
<p>Perhaps I don't understand exactly what you are proposing.  I was  
<br>
under the impression that you were going after a common case: mpirun  
<br>
and the MPI jobs are running on back-end compute nodes where all of  
<br>
them support SDP (although the other case of mpirun running on the  
<br>
head node without SDP and all the MPI processes are running on back- 
<br>
end nodes with SDP is also not-uncommon...).  Are you thinking of  
<br>
something else, or are you looking for more flexibility?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2976.php">Jeff Squyres: "Re: [OMPI devel] Integrating the memchecker branch"</a>
<li><strong>Previous message:</strong> <a href="2974.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>In reply to:</strong> <a href="2968.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2977.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>Reply:</strong> <a href="2977.php">Lenny Verkhovsky: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
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
