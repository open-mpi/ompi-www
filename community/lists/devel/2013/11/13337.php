<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29735 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 29 08:25:50 2013" -->
<!-- isoreceived="20131129132550" -->
<!-- sent="Fri, 29 Nov 2013 13:25:48 +0000" -->
<!-- isosent="20131129132548" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29735 - trunk" -->
<!-- id="AA72A0CE-89F0-4C14-9F68-2F0824DC0F49_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131122150621.7BABB1615BF_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29735 - trunk<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-29 08:25:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13338.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29735 - trunk"</a>
<li><strong>Previous message:</strong> <a href="13336.php">Ralph Castain: "[OMPI devel] OMPI Performance Metrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13338.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29735 - trunk"</a>
<li><strong>Reply:</strong> <a href="13338.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29735 - trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>I don't know if we want to s/Voltaire/Mellanox/g, particularly for old developers.  Gleb, for example, was never a Mellanox employee -- he only ever contributed as a Voltaire employee.
<br>
<p>I think you shouldn't change history like this -- I think those old were-never-Mellanox employees should be changed back to Voltaire.
<br>
<p><p><p>On Nov 22, 2013, at 10:06 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-11-22 10:06:20 EST (Fri, 22 Nov 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 29735
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/29735">https://svn.open-mpi.org/trac/ompi/changeset/29735</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fix AUTHORS with new developer
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.4:reviewer=ompi-rm1.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/AUTHORS |    11 ++++++-----                             
</span><br>
<span class="quotelev1">&gt;   1 files changed, 6 insertions(+), 5 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/AUTHORS
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/AUTHORS	Fri Nov 22 08:56:55 2013	(r29734)
</span><br>
<span class="quotelev1">&gt; +++ trunk/AUTHORS	2013-11-22 10:06:20 EST (Fri, 22 Nov 2013)	(r29735)
</span><br>
<span class="quotelev1">&gt; @@ -38,7 +38,7 @@
</span><br>
<span class="quotelev1">&gt; eugene      Eugene Loh                  Sun, Oracle
</span><br>
<span class="quotelev1">&gt; gef         Graham Fagg                 UTK
</span><br>
<span class="quotelev1">&gt; gingery     Ginger Young                LANL
</span><br>
<span class="quotelev1">&gt; -gleb        Gleb Natapov                Voltaire
</span><br>
<span class="quotelev1">&gt; +gleb        Gleb Natapov                Mellanox
</span><br>
<span class="quotelev1">&gt; gshipman    Galen Shipman               LANL
</span><br>
<span class="quotelev1">&gt; gwatson     Greg Watson                 LANL
</span><br>
<span class="quotelev1">&gt; herault     Thomas Herault              INRIA
</span><br>
<span class="quotelev1">&gt; @@ -60,11 +60,12 @@
</span><br>
<span class="quotelev1">&gt; knuepfer    Andreas Knuepfer            ZIH
</span><br>
<span class="quotelev1">&gt; koenig      Greg Koenig                 ORNL
</span><br>
<span class="quotelev1">&gt; lemarini    Pierre Lemarinier           UTK
</span><br>
<span class="quotelev1">&gt; -lennyve     Lenny Verkhovsky            Voltaire
</span><br>
<span class="quotelev1">&gt; +lennyve     Lenny Verkhovsky            Mellanox
</span><br>
<span class="quotelev1">&gt; lums        Andrew Lumsdaine            IU
</span><br>
<span class="quotelev1">&gt; manjugv     Manjunath Gorentla Venkata  ORNL
</span><br>
<span class="quotelev1">&gt; matney      Ken Matney                  ORNL
</span><br>
<span class="quotelev1">&gt; -miked       Mike Dubman                 Voltaire
</span><br>
<span class="quotelev1">&gt; +miked       Mike Dubman                 Mellanox
</span><br>
<span class="quotelev1">&gt; +devendar    Devendar Bureddy            Mellanox
</span><br>
<span class="quotelev1">&gt; mitch       Mitch Sukalski              SNL
</span><br>
<span class="quotelev1">&gt; mschaara    Mohamad Chaarawi            UH
</span><br>
<span class="quotelev1">&gt; mt          Mark Taylor                 LANL
</span><br>
<span class="quotelev1">&gt; @@ -89,7 +90,7 @@
</span><br>
<span class="quotelev1">&gt; samuel      Samuel K. Gutierrez         LANL
</span><br>
<span class="quotelev1">&gt; santhana    Gopal Santhanaraman         OSU
</span><br>
<span class="quotelev1">&gt; sboehm      Swen Boehm                  ORNL
</span><br>
<span class="quotelev1">&gt; -sharonm     Sharon Melamed              Voltaire
</span><br>
<span class="quotelev1">&gt; +sharonm     Sharon Melamed              Mellanox
</span><br>
<span class="quotelev1">&gt; shiqing     Shiqing Fan                 HLRS
</span><br>
<span class="quotelev1">&gt; sjeaugey    Sylvain Jeaugey             Bull
</span><br>
<span class="quotelev1">&gt; surs        Sayantan Sur                OSU
</span><br>
<span class="quotelev1">&gt; @@ -133,5 +134,5 @@
</span><br>
<span class="quotelev1">&gt; UPV = Universitat Politecnica de Valencia
</span><br>
<span class="quotelev1">&gt; UTK = University of Tennessee, Knoxville
</span><br>
<span class="quotelev1">&gt; UWL = University of Wisconsin-La Crosse
</span><br>
<span class="quotelev1">&gt; -Voltaire = Voltaire
</span><br>
<span class="quotelev1">&gt; +Mellanox = Mellanox
</span><br>
<span class="quotelev1">&gt; ZIH = Technische Universitaet Dresden
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13338.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29735 - trunk"</a>
<li><strong>Previous message:</strong> <a href="13336.php">Ralph Castain: "[OMPI devel] OMPI Performance Metrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13338.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29735 - trunk"</a>
<li><strong>Reply:</strong> <a href="13338.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29735 - trunk"</a>
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
