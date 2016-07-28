<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 16:10:06 2007" -->
<!-- isoreceived="20070824201006" -->
<!-- sent="Fri, 24 Aug 2007 14:09:44 -0600 (MDT)" -->
<!-- isosent="20070824200944" -->
<!-- name="Doug Tody" -->
<!-- email="dtody_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer" -->
<!-- id="Pine.LNX.4.64.0708241335470.2078_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="33A78681-9C57-49E8-A9D7-FC4297CD31E1_at_eecs.utk.edu" -->
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
<strong>From:</strong> Doug Tody (<em>dtody_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-24 16:09:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2217.php">Josh Aune: "[OMPI devel] More memory troubles with vapi"</a>
<li><strong>Previous message:</strong> <a href="2215.php">Jeff Squyres: "[OMPI devel] Better web searching of mail archives"</a>
<li><strong>In reply to:</strong> <a href="2213.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 24 Aug 2007, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 24, 2007, at 9:50 AM, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I do not understand why a user should have to use a RTE which supports
</span><br>
<span class="quotelev2">&gt; &gt; every system ever imagined, and provides every possible fault-tolerant
</span><br>
<span class="quotelev2">&gt; &gt; feature, when all they want is a thin RTE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have all the ingredients to make a this RTE layer, i.e. loadable  
</span><br>
<span class="quotelev1">&gt; modules. The approach we proposed few months ago, to load a component  
</span><br>
<span class="quotelev1">&gt; only when we know it will be needed give us a very slim RTE (once  
</span><br>
<span class="quotelev1">&gt; applied everywhere it make sense). The biggest problem I see here is  
</span><br>
<span class="quotelev1">&gt; that we will start scattering our efforts on multiple things instead  
</span><br>
<span class="quotelev1">&gt; of working together to make what we have right now the best it can be.
</span><br>
<p>I'm all for focusing effort on ORTE and making it the best it can
<br>
be, but it would seem that a more formalized component-framework
<br>
interface between the MPI layer and all of ORTE could potentially
<br>
help to achieve this.
<br>
<p>What would be ideal would be if the OpenMPI project could define
<br>
such an interface, and also provide and support a standard reference
<br>
version of ORTE which implements this functionality.  This could
<br>
provide the OpenMPI project with the minimal/stable run time layer it
<br>
needs, but at the same time make it much easier for outside projects
<br>
with other requirements to experiment with enhanced versions of ORTE,
<br>
without having to worry about the impact on core OpenMPI development.
<br>
This need not splinter the effort, rather it might make it possible for
<br>
others outside the core OpenMPI development team to more effectively
<br>
contribute to and use OpenMPI and ORTE, in particular when it comes
<br>
to integration of the software into new environments.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Doug
<br>
<p>National Radio Astronomy Observatory (NRAO)
<br>
US National Virtual Observatory (NVO)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2217.php">Josh Aune: "[OMPI devel] More memory troubles with vapi"</a>
<li><strong>Previous message:</strong> <a href="2215.php">Jeff Squyres: "[OMPI devel] Better web searching of mail archives"</a>
<li><strong>In reply to:</strong> <a href="2213.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
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
