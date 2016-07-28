<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 11 15:43:44 2006" -->
<!-- isoreceived="20060411194344" -->
<!-- sent="Tue, 11 Apr 2006 13:43:41 -0600" -->
<!-- isosent="20060411194341" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="443C06ED.70401_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4284AD05-7ED4-47DB-9BC6-5562B898B320_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-11 15:43:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1024.php">Troy Telford: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Previous message:</strong> <a href="1022.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="1022.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Nothing nefarious - just some bad advice. Fortunately, as my other note
indicated, Tim and company already fixed this by revising the launcher.<br>
<br>
Sorry for the confusion<br>
Ralph<br>
<br>
<br>
<br>
David Gunter wrote:
<blockquote cite="mid4284AD05-7ED4-47DB-9BC6-5562B898B320@lanl.gov"
 type="cite">
  <div>Thanks Ralph.</div>
  <div><br class="khtml-block-placeholder">
  </div>
Was there a reason this functionality wasn't in from the start then?&nbsp;
LA-MPI works under bproc using shared libraries.&nbsp;
  <div><br class="khtml-block-placeholder">
  </div>
  <div>I know Bproc folks like to kill the notion of shared libs but
they are a fact of life we can't live without.</div>
  <div><br class="khtml-block-placeholder">
  </div>
  <div>Just my $0.02.</div>
  <div><br class="khtml-block-placeholder">
  </div>
  <div>-david</div>
  <div><br>
  <div>
  <div>On Apr 11, 2006, at 1:24 PM, Ralph Castain wrote:</div>
  <br class="Apple-interchange-newline">
  <blockquote type="cite"> Unfortunately, that's all that is available
at the moment. Future releases (post 1.1) may get around this problem.<br>
    <br>
The issue is that the bproc launcher actually does a binary memory
image of the process, then replicates that across all the nodes. This
is how we were told to implement it originally by the BProc folks.
However, that means that shared libraries have problems, for obvious
reasons.<br>
    <br>
We have to reimplement the bproc launcher using a different approach -
will take a little time.<br>
    <br>
Ralph<br>
    <br>
    <br>
David Gunter wrote:
    <blockquote cite="midF1DFB447-0A60-4314-91F1-63D452093C8B@lanl.gov"
 type="cite">
      <pre wrap="">Unfortunately static-only will create binaries that will overwhelm  
our machines.  This is not a realistic option.

-david

On Apr 11, 2006, at 1:04 PM, Ralph Castain wrote:

  </pre>
      <blockquote type="cite">
        <pre wrap="">Also, remember that you must configure for static operation for  
bproc - use the configuration options "--enable-static --disable- 
shared". Our current bproc launcher *really* dislikes shared  
libraries.... ;-)
    </pre>
      </blockquote>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

  </pre>
    </blockquote>
    <div style="margin: 0px;">_______________________________________________</div>
    <div style="margin: 0px;">users mailing list</div>
    <div style="margin: 0px;"><a href="mailto:users@open-mpi.org">users@open-mpi.org</a></div>
    <div style="margin: 0px;"><a
 href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></div>
  </blockquote>
  </div>
  <br>
  </div>
  <pre wrap="">
<hr size="4" width="90%">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1024.php">Troy Telford: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Previous message:</strong> <a href="1022.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="1022.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
