<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 10:10:12 2012" -->
<!-- isoreceived="20120203151012" -->
<!-- sent="Fri, 3 Feb 2012 10:10:04 -0500" -->
<!-- isosent="20120203151004" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION" -->
<!-- id="3DB8358C-013C-4BFB-9A36-BBF4F8321ACE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB51459B.A3C2%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 10:10:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10313.php">Maurice Feskanich: "[OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Previous message:</strong> <a href="10311.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>In reply to:</strong> <a href="10311.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 3, 2012, at 10:05 AM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; What's the jsquyres_at_svby-mpi063 tag for?  It seems odd to have it there in
</span><br>
<span class="quotelev1">&gt; a release tarball, at least as presented.  Having the version number
</span><br>
<span class="quotelev1">&gt; earlier seems like a good idea...
</span><br>
<p>It's just username_at_hostname (my `hostname` doesn't return a domain name for uninteresting reasons).  FWIW, this is the same string that has been reported in ompi_info for a while now.  I believe the intent was that you could see the username of who built Open MPI / know who to blame if it was configured/built/installed incorrectly.  :-)
<br>
<p><pre>
----
[7:08] svbu-mpi:~ % ompi_info | head
                 Package: Open MPI jsquyres_at_svbu-mpi Distribution
                Open MPI: 1.7a1r25861
  Open MPI repo revision: r25861
   Open MPI release date: Unreleased developer copy
                Open RTE: 1.7a1r25861
  Open RTE repo revision: r25861
   Open RTE release date: Unreleased developer copy
                    OPAL: 1.7a1r25861
      OPAL repo revision: r25861
       OPAL release date: Unreleased developer copy
...
-----
&gt; Brian
&gt; 
&gt; On 2/2/12 5:01 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; I just committed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/25860">https://svn.open-mpi.org/trac/ompi/changeset/25860</a>
&gt;&gt; the new MPI-3 function MPI_GET_LIBRARY_VERSION (it's been voted in to
&gt;&gt; MPI-3).
&gt;&gt; 
&gt;&gt; Below shows what the string will return in various types of Open MPI
&gt;&gt; distributions.  Suggestions are welcome to change the content (i.e., feel
&gt;&gt; free to edit ompi/mpi/c/get_library_version.c :-) ).  The intent is that
&gt;&gt; users can submit this string to us with bug reports, etc.  It's a good
&gt;&gt; way to ensure that the version of OMPI that you're running with is the
&gt;&gt; version that you actually think you're running (e.g., if you have your
&gt;&gt; LD_LIBRARY_PATH set wrong).
&gt;&gt; 
&gt;&gt; FWIW: this function isn't as valuable to Open MPI as it is to other MPI
&gt;&gt; implementations (e.g., those that don't have an ompi_info-type of tool).
&gt;&gt; 
&gt;&gt; -----
&gt;&gt; 
&gt;&gt; Developer checkout:
&gt;&gt; 
&gt;&gt; Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution,
&gt;&gt; ident: 1.7a1r12345, repo rev: r12345, Unreleased developer copy
&gt;&gt; 
&gt;&gt; make dist from developer checkout:
&gt;&gt; 
&gt;&gt; Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution,
&gt;&gt; ident: 1.7a1, Unreleased developer copy
&gt;&gt; 
&gt;&gt; Greek tarball:
&gt;&gt; 
&gt;&gt; Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution,
&gt;&gt; ident: 1.7a1, repo rev: rexported, Feb 02, 2012
&gt;&gt; 
&gt;&gt; Release tarball:
&gt;&gt; 
&gt;&gt; Open MPI v1.7, package: Open MPI jsquyres_at_svbu-mpi063 Distribution,
&gt;&gt; ident: 1.7, repo rev: rexported, Feb 02, 2012
&gt;&gt; 
&gt;&gt; Nightly tarball:
&gt;&gt; 
&gt;&gt; Open MPI v1.7a1, package: Open MPI jsquyres_at_svbu-mpi063 Distribution,
&gt;&gt; ident: 1.7a1r12345, repo rev: r12345, Unreleased developer copy
&gt;&gt; 
&gt;&gt; -- 
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to:
&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; 
&gt;&gt; 
&gt; 
&gt; 
&gt; -- 
&gt;  Brian W. Barrett
&gt;  Dept. 1423: Scalable System Software
&gt;  Sandia National Laboratories
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10313.php">Maurice Feskanich: "[OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Previous message:</strong> <a href="10311.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<li><strong>In reply to:</strong> <a href="10311.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
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
