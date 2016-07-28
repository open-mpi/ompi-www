<?
$subject_val = "Re: [OMPI users] Problem with Yosemite";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 13:46:56 2014" -->
<!-- isoreceived="20141024174656" -->
<!-- sent="Fri, 24 Oct 2014 10:46:51 -0700" -->
<!-- isosent="20141024174651" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Yosemite" -->
<!-- id="857D9B78-C5B0-47BB-98AD-897335E9C9CA_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7378D4C7-22A0-4D2D-92A4-29A06C6558EA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with Yosemite<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-24 13:46:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25579.php">Ralph Castain: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>In reply to:</strong> <a href="25577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Yosemite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25579.php">Ralph Castain: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Reply:</strong> <a href="25579.php">Ralph Castain: "Re: [OMPI users] Problem with Yosemite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will do - just taking forever to update my Darwin ports so I can try with their libtool version
<br>
<p>Guillaume - did you remember to update your ports before building? Major changes to support Yosemite.
<br>
<p><p><span class="quotelev1">&gt; On Oct 24, 2014, at 10:01 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you try a 1.8 nightly tarball build on Y?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 24, 2014, at 12:32 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could well be - I&#146;m using the libtool from Apple
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Apple Inc. version cctools-855
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just verified that 1.8 is working fine as well.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 24, 2014, at 9:23 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is maybe related to a problem in libtool:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://lists.gnu.org/archive/html/libtool-patches/2014-09/msg00002.html">http://lists.gnu.org/archive/html/libtool-patches/2014-09/msg00002.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Oct 24, 2014 at 6:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was able to build and run the trunk without problem on Yosemite with:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gcc (MacPorts gcc49 4.9.1_0) 4.9.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; GNU Fortran (MacPorts gcc49 4.9.1_0) 4.9.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Will test 1.8 branch now, though I believe the fortran support in 1.8 is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; up-to-date
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 24, 2014, at 6:46 AM, Guillaume Houzeaux &lt;guillaume.houzeaux_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Good morning/afternoon/night,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I actualized my OS two days ago from Maverick to Yosemite (Xcode6.1).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I recompiled openmpi-1.4.1, openmpi-1.6.3, openmpi-1.8.3 and get the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What I did:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. mpif90 test_openmpi.f90 -o test_openmpi.x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. ./test_openmpi.x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BEFORE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [bsccs456.int.bsc.es:81492] [[INVALID],INVALID] ORTE_ERROR_LOG: Unknown
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error: -1 in file runtime/orte_globals.c at line 173
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; input in flex scanner failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Guillaume
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le camembert, de son fumet de venaison, avait vaincu les odeurs plus sourdes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; du marolles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; et du limbourg; il &#233;largissait ses exhalaisons, &#233;touffait les autres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; senteurs sous une
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; abondance surprenante d&#146;haleines g&#226;t&#233;es. Cependant, au milieu de cette
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; phrase vigoureuse,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; le parmesan jetait par moments un filet mince de fl&#251;te champ&#234;tre ; tandis
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; que les brie y
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mettaient des douceurs fades de tambourins humides. Il y eut une reprise
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suffocante du
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; livarot. Et cette symphonie se tint un moment sur une note aigu&#235; du g&#233;rom&#233;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anis&#233;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prolong&#233;e en point d&#146;orgue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Emile Zola - Le Ventre de Paris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Guillaume Houzeaux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Team Leader
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dpt. Computer Applications in Science and Engineering
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Barcelona Supercomputing Center (BSC-CNS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Edificio NEXUS I, Office 204
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; c) Gran Capitan 2-4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 08034 Barcelona, Spain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: +34 93 405 4291
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fax: +34 93 413 7721
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Skype user: guillaume_houzeaux_bsc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WWW: CASE department
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ResearcherID: D-4950-2012
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Scientific Profile: &lt;rg-15.png&gt; &lt;gs-15.png&gt; &lt;orcid-15.png&gt; &lt;r-15.png&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;BSC.gif&gt; &lt;SO.png&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; individual or entity to which it is addressed and may contain information
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which is privileged, confidential, proprietary, or exempt from disclosure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; under applicable law. If you are not the intended recipient or the person
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; responsible for delivering the message to the intended recipient, you are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; strictly prohibited from disclosing, distributing, copying, or in any way
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using this message. If you have received this communication in error, please
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; notify the sender and destroy and delete any copies you may have received.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;config.log.bz2&gt;&lt;environment_variables.bz2&gt;&lt;ompi_info.bz2&gt;&lt;ompi_infovompi.bz2&gt;&lt;test_openmpi.f90.bz2&gt;&lt;guillaume_houzeaux.vcf&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25570.php">http://www.open-mpi.org/community/lists/users/2014/10/25570.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25573.php">http://www.open-mpi.org/community/lists/users/2014/10/25573.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25574.php">http://www.open-mpi.org/community/lists/users/2014/10/25574.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25576.php">http://www.open-mpi.org/community/lists/users/2014/10/25576.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25577.php">http://www.open-mpi.org/community/lists/users/2014/10/25577.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25579.php">Ralph Castain: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>In reply to:</strong> <a href="25577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with Yosemite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25579.php">Ralph Castain: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Reply:</strong> <a href="25579.php">Ralph Castain: "Re: [OMPI users] Problem with Yosemite"</a>
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
