<?
$subject_val = "Re: [OMPI devel] RFC: Move of ompi_bitmap_t";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  1 11:40:54 2009" -->
<!-- isoreceived="20090201164054" -->
<!-- sent="Sun, 01 Feb 2009 11:40:36 -0500" -->
<!-- isosent="20090201164036" -->
<!-- name="Broto, Laurent G." -->
<!-- email="broto_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move of ompi_bitmap_t" -->
<!-- id="D1DFBFD6C16437488E00C95AF6C804B304799137_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2F2A02EF-FDE7-42DD-ACCE-686F076EA8C8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Move of ompi_bitmap_t<br>
<strong>From:</strong> Broto, Laurent G. (<em>broto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-01 11:40:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5350.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5348.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5347.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5354.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5354.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I am Laurent Broto, a Rich Graham postdoc. I'm currently working on the BTL extraction with Greg Koenig and Rainer Keller.
<br>
<p>At this time, I want to group all the *_bitmap function in only one layer.
<br>
<p>Now, you know who I am :)
<br>
<p>So, just one question. I had in my mind:
<br>
- adding a max_size in the opal_bitmap_t structure,
<br>
- at the init time, set this field with INT_MAX or whatever the type is _MAX,
<br>
- add a set_max_size functions to change the max_size,
<br>
- for each function needs this test, just do if( new_size &lt; param-&gt;max_size) ...
<br>
<p>I guess it is more efficient than the Jeff approach who is supposed to
<br>
- first test if the max size has been set,
<br>
- then ensure that the bitmap never grows beyond that size.
<br>
<p>In the first approach we only do one test, in the second one, always one and sometimes two.
<br>
<p>But may I miss something...
<br>
<p>What do you think about this ?
<br>
<p><pre>
-- 
Laurent
-----Original Message-----
From: devel-bounces_at_[hidden] on behalf of Jeff Squyres
Sent: Sun 2/1/2009 7:37 AM
To: Open MPI Developers
Subject: Re: [OMPI devel] RFC: Move of ompi_bitmap_t
 
I just looked through both opal_bitmap_t and ompi_bitmap_t and I think  
that the only real difference is that in the ompi version, we check  
(in various places) that the size of the bitmap never grows beyond  
OMPI_FORTRAN_HANDLE_MAX; the opal version doesn't do these kind of  
size checks.
I think it would be fairly straightforward to:
- add generic checks into the opal version, perhaps by adding a new  
API call (opal_bitmap_set_max_size())
- if the max size has been set, then ensure that the bitmap never  
grows beyond that size, otherwise let it have the same behavior as  
today (grow without bound -- assumedly until malloc() fails)
It'll take a little care to ensure to merge the functionality  
correctly, but it is possible.  Once that is done, you can:
- remove the ompi_bitmap_t class
- s/ompi_bitmap/opal_bitmap/g in the OMPI layer
- add new calls to opal_bitmap_set_max_size(&amp;bitmap,  
OMPI_FORTRAN_HANDLE_MAX) in the OMPI layer (should only be in a few  
places -- probably one for each MPI handle type...?  It's been so long  
since I've looked at that code that I don't remember offhand)
I'd generally be in favor of this because, although this is not a lot  
of repeated code, it *is* repeated code -- so cleaning it up and  
consolidating the non-Fortran stuff down in opal is not a Bad Thing.
On Jan 30, 2009, at 4:59 PM, Ralph Castain wrote:
&gt; The history is simple. Originally, there was one bitmap_t in orte  
&gt; that was also used in ompi. Then the folks working on Fortran found  
&gt; that they had to put a limit in the bitmap code to avoid getting  
&gt; values outside of Fortran's range. However, this introduced a  
&gt; problem - if we had the limit in the orte version, then we limited  
&gt; ourselves unnecessarily, and introduced some abstraction questions  
&gt; since orte knows nothing about Fortran.
&gt;
&gt; So two were created. Then the orte_bitmap_t was blown away at a  
&gt; later time when we removed the GPR as George felt it wasn't  
&gt; necessary (which was true). It was later reborn when we needed it in  
&gt; the routed system, but this time it was done in opal as others  
&gt; indicated a potential more general use for that capability.
&gt;
&gt; The problem with uniting the two is that you either have to  
&gt; introduce Fortran-based limits into opal (which messes up the non- 
&gt; ompi uses), or deal with the Fortran limits in some other fashion.  
&gt; Neither is particularly pleasant, though it could be done.
&gt;
&gt; I think it primarily is a question for the Fortran folks to address  
&gt; - can they deal with Fortran limits in some other manner without  
&gt; making the code unmanageable and/or taking a performance hit?
&gt;
&gt; Ralph
&gt;
&gt;
&gt; On Jan 30, 2009, at 2:40 PM, Richard Graham wrote:
&gt;
&gt;&gt; This should really be viewed as a code maintenance RFC.  The reason  
&gt;&gt; this
&gt;&gt; came up in the first place is because we are investigating the btl  
&gt;&gt; move, but
&gt;&gt; these are really two very distinct issues.  There are two bits of  
&gt;&gt; code that
&gt;&gt; have virtually the same functionality - they do have the same  
&gt;&gt; interface I am
&gt;&gt; told.  The question is, is there a good reason to keep two different
&gt;&gt; versions in the repository ?  Not knowing the history of why a second
&gt;&gt; version was created this is an inquiry.  Is there some performance
&gt;&gt; advantage, or some other advantage to having these two versions ?
&gt;&gt;
&gt;&gt; Rich
&gt;&gt;
&gt;&gt;
&gt;&gt; On 1/30/09 3:23 PM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
&gt;&gt;
&gt;&gt;&gt; I second Brian's concern.  So unless this is just an announcement  
&gt;&gt;&gt; that
&gt;&gt;&gt; this is being done on a tmp branch only until everything is in  
&gt;&gt;&gt; order I
&gt;&gt;&gt; think we need further discussions.
&gt;&gt;&gt;
&gt;&gt;&gt; --td
&gt;&gt;&gt;
&gt;&gt;&gt; Brian Barrett wrote:
&gt;&gt;&gt;&gt; So once again, I bring up my objection of this entire line of  
&gt;&gt;&gt;&gt; moving
&gt;&gt;&gt;&gt; until such time as the entire process is properly mapped out.  I
&gt;&gt;&gt;&gt; believe it's premature to being moving around code in preparation  
&gt;&gt;&gt;&gt; for
&gt;&gt;&gt;&gt; a move that hasn't been proven viable yet.  Until there is concrete
&gt;&gt;&gt;&gt; evidence that such a move is possible, won't degrade application
&gt;&gt;&gt;&gt; performance, and does not make the code totally unmaintainable, I
&gt;&gt;&gt;&gt; believe that any related code changes should not be brought into  
&gt;&gt;&gt;&gt; the
&gt;&gt;&gt;&gt; trunk.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Brian
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Jan 30, 2009, at 12:30 PM, Rainer Keller wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; On behalf of Laurent Broto
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; RFC: Move of ompi_bitmap_t
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; WHAT: Move ompi_bitmap_t into opal or onet-layer
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; WHY: Remove dependency on ompi-layer.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; WHERE: ompi/class
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; WHEN: Open MPI-1.4
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; TIMEOUT: February 3, 2009.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; -------------------------------------
&gt;&gt;&gt;&gt;&gt; Details:
&gt;&gt;&gt;&gt;&gt; WHY:
&gt;&gt;&gt;&gt;&gt; The ompi_bitmap_t is being used in various places within
&gt;&gt;&gt;&gt;&gt; opal/orte/ompi. With
&gt;&gt;&gt;&gt;&gt; the proposed splitting of BTLs into a separate library, we are  
&gt;&gt;&gt;&gt;&gt; currently
&gt;&gt;&gt;&gt;&gt; investigating several of the differences between ompi/class/* and
&gt;&gt;&gt;&gt;&gt; opal/class/*
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; One of the items is the ompi_bitmap_t which is quite similar to  
&gt;&gt;&gt;&gt;&gt; the
&gt;&gt;&gt;&gt;&gt; opal_bitmap_t.
&gt;&gt;&gt;&gt;&gt; The question is, whether we can remove favoring a solution just  
&gt;&gt;&gt;&gt;&gt; in opal.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; WHAT:
&gt;&gt;&gt;&gt;&gt; The data structures in the opal-version are the same,
&gt;&gt;&gt;&gt;&gt; so is the interface,
&gt;&gt;&gt;&gt;&gt; the implementation is *almost* the same....
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; The difference is the Fortran handles ;-]!
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Maybe we're missing something but could we have a discussion, on  
&gt;&gt;&gt;&gt;&gt; why
&gt;&gt;&gt;&gt;&gt; Fortran
&gt;&gt;&gt;&gt;&gt; sizes are playing a role here, and if this is a hard  
&gt;&gt;&gt;&gt;&gt; requirement, how
&gt;&gt;&gt;&gt;&gt; we could
&gt;&gt;&gt;&gt;&gt; settle that into that current interface (possibly without a  
&gt;&gt;&gt;&gt;&gt; notion of
&gt;&gt;&gt;&gt;&gt; Fortran,
&gt;&gt;&gt;&gt;&gt; but rather, set some upper limit that the bitmap may grow to?)
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; With best regards,
&gt;&gt;&gt;&gt;&gt; Laurent and Rainer
&gt;&gt;&gt;&gt;&gt; -- 
&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt; Rainer Keller, PhD                  Tel: (865) 241-6293
&gt;&gt;&gt;&gt;&gt; Oak Ridge National Lab          Fax: (865) 241-4811
&gt;&gt;&gt;&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
&gt;&gt;&gt;&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5350.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5348.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5347.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5354.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5354.php">Jeff Squyres: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
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
