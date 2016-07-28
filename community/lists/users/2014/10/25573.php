<?
$subject_val = "Re: [OMPI users] Problem with Yosemite";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 24 12:09:20 2014" -->
<!-- isoreceived="20141024160920" -->
<!-- sent="Fri, 24 Oct 2014 09:09:16 -0700" -->
<!-- isosent="20141024160916" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Yosemite" -->
<!-- id="49281FA0-DC67-4129-BD97-F6B7B968FB40_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="544A5820.9070904_at_bsc.es" -->
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
<strong>Date:</strong> 2014-10-24 12:09:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25574.php">Bert Wesarg: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25572.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>In reply to:</strong> <a href="25570.php">Guillaume Houzeaux: "[OMPI users] Problem with Yosemite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25574.php">Bert Wesarg: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Reply:</strong> <a href="25574.php">Bert Wesarg: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Reply:</strong> <a href="25619.php">Guillaume Houzeaux: "Re: [OMPI users] Problem with Yosemite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to build and run the trunk without problem on Yosemite with:
<br>
<p>gcc (MacPorts gcc49 4.9.1_0) 4.9.1
<br>
GNU Fortran (MacPorts gcc49 4.9.1_0) 4.9.1
<br>
<p>Will test 1.8 branch now, though I believe the fortran support in 1.8 is up-to-date
<br>
<p><p><span class="quotelev1">&gt; On Oct 24, 2014, at 6:46 AM, Guillaume Houzeaux &lt;guillaume.houzeaux_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good morning/afternoon/night,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I actualized my OS two days ago from Maverick to Yosemite (Xcode6.1).
</span><br>
<span class="quotelev1">&gt; I recompiled openmpi-1.4.1, openmpi-1.6.3, openmpi-1.8.3 and get the same problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I did:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. mpif90 test_openmpi.f90 -o test_openmpi.x
</span><br>
<span class="quotelev1">&gt; 2. ./test_openmpi.x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  BEFORE
</span><br>
<span class="quotelev1">&gt; [bsccs456.int.bsc.es:81492] [[INVALID],INVALID] ORTE_ERROR_LOG: Unknown error: -1 in file runtime/orte_globals.c at line 173
</span><br>
<span class="quotelev1">&gt; input in flex scanner failed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guillaume
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Le camembert, de son fumet de venaison, avait vaincu les odeurs plus sourdes du marolles 
</span><br>
<span class="quotelev1">&gt; et du limbourg; il &#233;largissait ses exhalaisons, &#233;touffait les autres senteurs sous une 
</span><br>
<span class="quotelev1">&gt; abondance surprenante d&#146;haleines g&#226;t&#233;es. Cependant, au milieu de cette phrase vigoureuse, 
</span><br>
<span class="quotelev1">&gt; le parmesan jetait par moments un filet mince de fl&#251;te champ&#234;tre ; tandis que les brie y 
</span><br>
<span class="quotelev1">&gt; mettaient des douceurs fades de tambourins humides. Il y eut une reprise suffocante du 
</span><br>
<span class="quotelev1">&gt; livarot. Et cette symphonie se tint un moment sur une note aigu&#235; du g&#233;rom&#233; anis&#233;, 
</span><br>
<span class="quotelev1">&gt; prolong&#233;e en point d&#146;orgue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Emile Zola - Le Ventre de Paris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guillaume Houzeaux
</span><br>
<span class="quotelev1">&gt; Team Leader
</span><br>
<span class="quotelev1">&gt; Dpt. Computer Applications in Science and Engineering
</span><br>
<span class="quotelev1">&gt; Barcelona Supercomputing Center (BSC-CNS)
</span><br>
<span class="quotelev1">&gt; Edificio NEXUS I, Office 204
</span><br>
<span class="quotelev1">&gt; c) Gran Capitan 2-4
</span><br>
<span class="quotelev1">&gt; 08034 Barcelona, Spain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel: +34 93 405 4291
</span><br>
<span class="quotelev1">&gt; Fax: +34 93 413 7721
</span><br>
<span class="quotelev1">&gt; Skype user: guillaume_houzeaux_bsc
</span><br>
<span class="quotelev1">&gt; WWW: CASE department &lt;<a href="http://www.bsc.es/computer-applications">http://www.bsc.es/computer-applications</a>&gt; 
</span><br>
<span class="quotelev1">&gt; ResearcherID: D-4950-2012 
</span><br>
<span class="quotelev1">&gt; Scientific Profile: &lt;rg-15.png&gt; &lt;<a href="https://www.researchgate.net/profile/Guillaume_Houzeaux">https://www.researchgate.net/profile/Guillaume_Houzeaux</a>&gt; &lt;gs-15.png&gt; &lt;<a href="http://scholar.google.es/citations?user=cL9khdYAAAAJ&amp;hl=en">http://scholar.google.es/citations?user=cL9khdYAAAAJ&amp;hl=en</a>&gt; &lt;orcid-15.png&gt; &lt;<a href="http://orcid.org/0000-0002-2592-1426">http://orcid.org/0000-0002-2592-1426</a>&gt; &lt;r-15.png&gt; &lt;<a href="http://www.researcherid.com/rid/D-4950-2012">http://www.researcherid.com/rid/D-4950-2012</a>&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;BSC.gif&gt; &lt;SO.png&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the individual or entity to which it is addressed and may contain information which is privileged, confidential, proprietary, or exempt from disclosure under applicable law. If you are not the intended recipient or the person responsible for delivering the message to the intended recipient, you are strictly prohibited from disclosing, distributing, copying, or in any way using this message. If you have received this communication in error, please notify the sender and destroy and delete any copies you may have received. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a> &lt;<a href="http://www.bsc.es/disclaimer.htm">http://www.bsc.es/disclaimer.htm</a>&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;&lt;environment_variables.bz2&gt;&lt;ompi_info.bz2&gt;&lt;ompi_infovompi.bz2&gt;&lt;test_openmpi.f90.bz2&gt;&lt;guillaume_houzeaux.vcf&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25570.php">http://www.open-mpi.org/community/lists/users/2014/10/25570.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25573/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25574.php">Bert Wesarg: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Previous message:</strong> <a href="25572.php">Michael.Rachner_at_[hidden]: "[OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>In reply to:</strong> <a href="25570.php">Guillaume Houzeaux: "[OMPI users] Problem with Yosemite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25574.php">Bert Wesarg: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Reply:</strong> <a href="25574.php">Bert Wesarg: "Re: [OMPI users] Problem with Yosemite"</a>
<li><strong>Reply:</strong> <a href="25619.php">Guillaume Houzeaux: "Re: [OMPI users] Problem with Yosemite"</a>
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
