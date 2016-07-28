<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr 22 13:12:28 2006" -->
<!-- isoreceived="20060422171228" -->
<!-- sent="Sat, 22 Apr 2006 11:12:22 -0600" -->
<!-- isosent="20060422171222" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121" -->
<!-- id="444A63F6.2020203_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="10526EF1-2C7A-4BBE-96B2-33489F40A31D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-04-22 13:12:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0842.php">Manjunath GV: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Previous message:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>In reply to:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0842.php">Manjunath GV: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Reply:</strong> <a href="0842.php">Manjunath GV: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Another thing to try - go to your installation location's lib
subdirectory (at $prefix/lib) and delete everything that is there. Then
go back to the directory where you put the software and do a "make
install" again.<br>
<br>
Sometimes, especially if you are upgrading to a new version, you can be
burned by stale shared libraries. This sounds like it could be the
problem here. We don't remove any old libraries when you do an
installation, so if you change versions, you really should do this
procedure to avoid picking up "old stuff".<br>
<br>
Alternatively, you could build and run without shared libraries to
avoid this problem altogether - just reconfigure with "--enable-static
--disable-shared" and then do "make clean all install".<br>
<br>
Ralph<br>
<br>
<br>
Brian Barrett wrote:
<blockquote cite="mid10526EF1-2C7A-4BBE-96B2-33489F40A31D@open-mpi.org"
 type="cite">
  <pre wrap="">Well, so much for the easy one :(.

Is it possible that you have two versions of Open MPI in your path  
somewhere and that you might be getting different versions on  
different nodes?  The errors below generally indicate that data was  
received in a totally different format than expected, so I'm just  
kind of guessing as to how one could get to that situation...

Brian

On Apr 21, 2006, at 5:01 PM, Manjunath G Venkata wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">On Thu, 20 Apr 2006, Brian Barrett wrote:

    </pre>
    <blockquote type="cite">
      <pre wrap="">Are these both identical architecture?  Those look suspiciously  
like what happens when you're trying to mix 32/64 bit or little  
endian / big endian.

      </pre>
    </blockquote>
    <pre wrap="">- Both my nodes are Intel Xeons and run linux 2.4.26.

-Manjunath

    </pre>
    <blockquote type="cite">
      <pre wrap="">Brian

On Apr 20, 2006, at 8:53 PM, Galen M. Shipman wrote:

      </pre>
      <blockquote type="cite">
        <pre wrap="">Hey Guys,
Not sure what is going on here, has anyone seen this before?
- Galen
        </pre>
        <blockquote type="cite">
          <pre wrap="">Hi Galen,
Sorry to bother you.
I have installed latest stable version of Open MPI(1.0) on two  
of spider
nodes(s7,s4) for some experiments, but there seems to be  
configuration
error  or something else which I don't understand. After  
installing, as
a test I ran an simple MPI program but it complains with following
errors.
[s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
dps_unpack.c at line 121
[s4:10685] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
dps_unpack.c at line 95
Further digging with gdb prints following errors
[s7:07005] ERROR: A daemon on node s4 failed to start as expected.
[s7:07005] ERROR: There may be more information available from
[s7:07005] ERROR: the remote shell (see above).
[s7:07005] The daemon received a signal 5.
[s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
dps_unpack.c at line 121
[s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
dps_unpack.c at line 95
[s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
dps_unpack.c at line 121
[s7:07005] [0,0,0] ORTE_ERROR_LOG: Pack data mismatch in file
dps_unpack.c at line 95
any clue on what I am doing wrong ?
thanks,
-Manjunath
          </pre>
        </blockquote>
        <pre wrap="">_______________________________________________
devel mailing list
<a class="moz-txt-link-abbreviated" href="mailto:devel@open-mpi.org">devel@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
        </pre>
      </blockquote>
    </blockquote>
  </blockquote>
  <pre wrap=""><!---->
_______________________________________________
devel mailing list
<a class="moz-txt-link-abbreviated" href="mailto:devel@open-mpi.org">devel@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0842.php">Manjunath GV: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Previous message:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>In reply to:</strong> <a href="0840.php">Brian Barrett: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0842.php">Manjunath GV: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
<li><strong>Reply:</strong> <a href="0842.php">Manjunath GV: "Re: [OMPI devel] Pack data mismatch in file dps_unpack.c 95/121"</a>
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
