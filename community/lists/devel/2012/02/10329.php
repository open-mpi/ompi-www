<?
$subject_val = "Re: [OMPI devel] RFC: Java MPI bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 15:48:50 2012" -->
<!-- isoreceived="20120207204850" -->
<!-- sent="Tue, 7 Feb 2012 13:48:41 -0700" -->
<!-- isosent="20120207204841" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Java MPI bindings" -->
<!-- id="89C1749B-276C-42FD-89D8-5971D27306E7_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F318CF3.3080209_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Java MPI bindings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 15:48:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10330.php">Jeff Squyres: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10328.php">Jeff Squyres: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10327.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10331.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Reply:</strong> <a href="10331.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7, 2012, at 1:43 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Forgive me if I misunderstand, but I am under the impression that the MPI Forum has not begun any standardization of MPI bindings for JAVA. Have I missed something?
</span><br>
<p>No, they haven't - but that doesn't mean that the bindings cannot conform to the standard. Remember, the standard doesn't dictate that you can't have Java bindings - it just doesn't currently require that you do. Big difference in those two statements.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/7/2012 12:39 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We already have a stable, standard interface for non-C language bindings, Paul - the C++ bindings, for example, are built on top of them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The binding codes are all orthogonal to the base code. All they do is massage data access and then loop back to the C bindings. This is the normal way we handle all non-C bindings, so nothing different there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The work has been done on a branch, and an RFC issued. The bindings conform to the MPI standard, and the implementation uses an existing external, third-party binding that has been tested.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I'm not sure what you are asking that hasn't already been done&#133;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 7, 2012, at 1:33 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As an HPC software developer and user of OMPI, I'd like to add my $0.02 here even though I am not an OMPI developer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nothing in George's response seems to me to preclude the interested institutions (listed as FROM in the RFC) from forking a branch to pursue this work until there can be standardization of Java bindings.  If the JAVA bindings really are as &quot;orthogonal&quot; to the rest of the code as the RFC authors claim, then merging a branch back to the trunk when they have a stable/standard interface should not be onerous.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know from experience in other projects that work that SHOULD &quot;have zero impact&quot; on those not using it seldom does.  There is always something that pops up, such as small autotools mistakes that break nighlty tarballs and goofs like that.  If nothing else, the existance of the JAVA bindings would seem to impose an additional testing burden on developers making changes to internal interfaces and data structures.  For that reason I agree w/ George that there is not yet sufficiently low risk/reward to support adding Java bindings in OMPI's trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I'd propose that the work be done on a branch and the RFC can be reissued when there is both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a) a standard to which the bindings can claim to conform
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b) an implementation which has been shown to be stable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/7/2012 12:18 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Nobody is asking us to make any decision or take a position re standardization. The Hadoop community fully intends to bring the question of Java binding standards to the Forum over the next year, but we all know that is a long, arduous journey. In the interim, they not only asked that we provide the bindings in our release, but also are providing the support to maintain them.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If members of the Python or R communities were to step forward, offer to do the work and maintain it, and could show it had zero impact on the rest of the code base, I for one would welcome their bindings. Can't see the harm - can always be removed if/when they ceased to support them on their own.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 7, 2012, at 12:33 PM, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This doesn't sound like a very good idea, despite a significant support from a lot of institutions. There is no standardization efforts in the targeted community, and championing a broader support in the Java world was not one of our main target.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI does not include the Boost bindings, despite the fact that it was developed at IU. OMPI does not include Python nor R bindings despite their large user community. Why suddenly should we provide unstandardized Java bindings?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think we should not tackle such inclusion before there is at least a beginning of a standardization effort in the targeted community. They have to step up and address their needs (if they are real), instead of relying on us to take a decision. Until then, the fast growing targeted community should maintain the binding as a standalone project on their own.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 1, 2012, at 15:20 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; FROM: LANL, HLRS, Cisco, Oracle, and IBM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WHAT: Adds Java bindings
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WHY: The Hadoop community would like to use MPI in their efforts, and most of their code is in Java
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WHERE: ompi/mpi/java plus one new config file in ompi/config
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; TIMEOUT: Feb 10, 2012
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hadoop is a Java-based environment for processing extremely large data sets. Modeled on the Google enterprise system, it has evolved into its own open-source community. Currently, they use their own IPC for messaging, but acknowledge that it is nowhere near as efficient or well-developed as found in MPI.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; While 3rd party Java bindings are available, the Hadoop business world is leery of depending on something that &quot;bolts on&quot; - they would be more willing to adopt the technology if it were included in a &quot;standard&quot; distribution. Hence, they have requested that Open MPI provide that capability, and in exchange will help champion broader adoption of Java support within the MPI community.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We have based the OMPI bindings on the mpiJava code originally developed at IU, and currently maintained by HLRS. Adding the bindings to OMPI is completely transparent to all other OMPI users and has zero performance impact on the rest of the code/bindings. We have setup the configure so that the Java bindings will build if/when they can or are explicitly requested, just as with other language support.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As the Hadoop community represents a rapidly-growing new set of customers and needs, we feel that adding these bindings is appropriate. The bindings will be maintained by those organizations that have an interest in this use-case.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10330.php">Jeff Squyres: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10328.php">Jeff Squyres: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10327.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10331.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Reply:</strong> <a href="10331.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
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
