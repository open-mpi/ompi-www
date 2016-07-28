<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 06:50:22 2007" -->
<!-- isoreceived="20071011105022" -->
<!-- sent="Thu, 11 Oct 2007 12:46:36 +0200" -->
<!-- isosent="20071011104636" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Create a new component (for btl)" -->
<!-- id="CE0E369B-2F6A-446B-9000-2C679DD36E12_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.63.0710111030220.6536_at_lgserv3.stud.cs.uit.no" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 06:46:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2420.php">George Bosilca: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>Previous message:</strong> <a href="2418.php">Torje Henriksen: "[OMPI devel] Create a new component (for btl)"</a>
<li><strong>In reply to:</strong> <a href="2418.php">Torje Henriksen: "[OMPI devel] Create a new component (for btl)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2420.php">George Bosilca: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>Reply:</strong> <a href="2420.php">George Bosilca: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>Reply:</strong> <a href="2421.php">Jeff Squyres: "Re: [OMPI devel] Create a new component (for btl)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The elegant way is to go the way you are going. Basically you need to  
<br>
provide open and close to  the mca framework, init and finalize to  
<br>
the btl framework and populate all the functions defined in btl.h and  
<br>
btl/base/base.h. Copying an already existing btl is the best way not  
<br>
to forget anybody in that process. You also need to change names in  
<br>
makefile.am. The autogen.sh will do all the smart things and  
<br>
recognize and configure your new component. This is that simple :]
<br>
<p>Aurelien
<br>
<pre>
--
Aurelien Bouteiller, PhD
Innovative Computing Laboratory - MPI group
+1 865 974 6321
1122 Volunteer Boulevard
Claxton Education Building Suite 350
Knoxville, TN 37996
Le 11 oct. 07 &#224; 10:39, Torje Henriksen a &#233;crit :
&gt; Hi,
&gt;
&gt; I would like to make my own btl component for shared memory, and  
&gt; use that
&gt; instead of the sm component.
&gt;
&gt; First off I would just copy the current sm component, give it  
&gt; another name
&gt; and see if I can get that to load instead.
&gt;
&gt; Is there an elegant way of adding components, any documentation on  
&gt; this?
&gt;
&gt; I've tried to grep for mca_btl_sm etc, but the number of files  
&gt; returned is
&gt; daunting. Do I have to make changes all around ompi, or is there  
&gt; something
&gt; I'm missing? Some automagical goodness, maybe? ;)
&gt;
&gt;
&gt; Tanks,
&gt;
&gt; -Torje
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2420.php">George Bosilca: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>Previous message:</strong> <a href="2418.php">Torje Henriksen: "[OMPI devel] Create a new component (for btl)"</a>
<li><strong>In reply to:</strong> <a href="2418.php">Torje Henriksen: "[OMPI devel] Create a new component (for btl)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2420.php">George Bosilca: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>Reply:</strong> <a href="2420.php">George Bosilca: "Re: [OMPI devel] Create a new component (for btl)"</a>
<li><strong>Reply:</strong> <a href="2421.php">Jeff Squyres: "Re: [OMPI devel] Create a new component (for btl)"</a>
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
