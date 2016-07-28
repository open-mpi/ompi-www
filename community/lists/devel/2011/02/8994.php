<?
$subject_val = "Re: [OMPI devel] --enable-opal-multi-threads";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 16:54:37 2011" -->
<!-- isoreceived="20110215215437" -->
<!-- sent="Tue, 15 Feb 2011 13:53:30 -0800" -->
<!-- isosent="20110215215330" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --enable-opal-multi-threads" -->
<!-- id="4D5AF5DA.7000202_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DB774CF9-3D47-48A4-849E-1D08609008E0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] --enable-opal-multi-threads<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-15 16:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Previous message:</strong> <a href="8993.php">Jeff Squyres: "Re: [OMPI devel] 1.5.2rc1 is borked"</a>
<li><strong>In reply to:</strong> <a href="8989.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9002.php">Jeff Squyres: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Reply:</strong> <a href="9002.php">Jeff Squyres: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Ralph Castain wrote:
<blockquote cite="midDB774CF9-3D47-48A4-849E-1D08609008E0@open-mpi.org"
 type="cite">
  <pre wrap="">On Feb 15, 2011, at 9:24 AM, Eugene Loh wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">Ralph Castain wrote:
    </pre>
    <blockquote type="cite">
      <pre wrap="">On Feb 14, 2011, at 9:26 PM, Abhishek Kulkarni wrote:
      </pre>
      <blockquote type="cite">
        <pre wrap="">On Mon, 14 Feb 2011, Ralph Castain wrote:
        </pre>
        <blockquote type="cite">
          <pre wrap="">If the ability to turn "on" thread support is missing from 1.5, then that is an error.  
          </pre>
        </blockquote>
        <pre wrap="">No, it was changed from "--enable-mpi-threads" to "--enable-opal-multi-threads" on the trunk in r22841 [1].
  
If the changeset has not been brought over to v1.5, it indeed looks like an anachronism in the README.

[1] <a class="moz-txt-link-freetext" href="https://svn.open-mpi.org/trac/ompi/changeset/22841">https://svn.open-mpi.org/trac/ompi/changeset/22841</a>
        </pre>
      </blockquote>
      <pre wrap="">My point is that it isn't an anachronism in the README, but an error in 1.5 - it needs to have the ability to turn on thread safety.
      </pre>
    </blockquote>
    <pre wrap="">I'm not sure if we're making progress here.  So far as I can tell, the v1.5 README talks about --enable-opal-multi-threads.  This option does not otherwise appear in v1.5, but only in the trunk.  So, to make the v1.5 README consistent with the v1.5 source code (as opposed to talking about features that will appear in unspecified future releases), either:

*) the comment should be removed from the README, or

*) opal-multi-threads should be CMRed to v1.5
    </pre>
  </blockquote>
  <pre wrap=""><!---->My point is that option 2 needs to be done - not sure how much clearer I can be :-)
  </pre>
</blockquote>
Are we talking about CMRing such a change (r22841 perhaps?) to 1.5.2?&nbsp;
If so, is there already such a CMR?&nbsp; Or, should I (or someone better
suited for the job) file such a CMR?&nbsp; Which changesets?&nbsp; Candidate for
reviewer?<br>
<br>
Or, are we talking about CMRing to 1.5.3?&nbsp; If so, the comment in
question should be pulled out of the 1.5.2 README.<br>
<br>
I understand opal-multi-threads is A Good Thing.&nbsp; I'm just against
touting it in the README file when it doesn't yet exist in the bits
(equivalently, putting it in the 1.5 README when the functionality is
only in the trunk).<br>
<blockquote cite="midDB774CF9-3D47-48A4-849E-1D08609008E0@open-mpi.org"
 type="cite">
  <pre wrap=""></pre>
  <blockquote type="cite">
    <blockquote type="cite">
      <blockquote type="cite">
        <blockquote type="cite">
          <pre wrap="">On Feb 14, 2011, at 5:36 PM, Eugene Loh wrote:
          </pre>
          <blockquote type="cite">
            <pre wrap="">In the v1.5 README, I see this:

--enable-opal-multi-threads
Enables thread lock support in the OPAL and ORTE layers. Does
not enable MPI_THREAD_MULTIPLE - see above option for that feature.
This is currently disabled by default.

I don't otherwise find opal-multi-threads at all in this branch.  It seems to me, for such an option, one needs to move to the trunk.

Is this an error (anachronism) in the v1.5 README?
            </pre>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
  </blockquote>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8995.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24395"</a>
<li><strong>Previous message:</strong> <a href="8993.php">Jeff Squyres: "Re: [OMPI devel] 1.5.2rc1 is borked"</a>
<li><strong>In reply to:</strong> <a href="8989.php">Ralph Castain: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9002.php">Jeff Squyres: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Reply:</strong> <a href="9002.php">Jeff Squyres: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
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
