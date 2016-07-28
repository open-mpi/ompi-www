<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 11 15:04:40 2006" -->
<!-- isoreceived="20060411190440" -->
<!-- sent="Tue, 11 Apr 2006 13:04:37 -0600" -->
<!-- isosent="20060411190437" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform" -->
<!-- id="443BFDC5.80405_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="793BE40A-9DE7-4DBF-906D-0F3B5DA99E15_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-04-11 15:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1018.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="1016.php">David Daniel: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="1016.php">David Daniel: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1018.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="1018.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Heterogeneous operations are not supported on 1.0 - they are, however,
on the new 1.1. <span class="moz-smiley-s1"><span> :-) </span></span><br>
<br>
Also, remember that you must configure for static operation for bproc -
use the configuration options "--enable-static --disable-shared". Our
current bproc launcher *really* dislikes shared libraries.... <span
 class="moz-smiley-s3"><span> ;-) </span></span><br>
<br>
Ralph<br>
<br>
<br>
David Daniel wrote:
<blockquote cite="mid793BE40A-9DE7-4DBF-906D-0F3B5DA99E15@lanl.gov"
 type="cite">
  <pre wrap="">I suspect that to get this to work for bproc, then we will have to  
build mpirun as 64-bit and the library as 32-bit.  That's because a  
32-bit compiled mpirun calls functions in the 32-bit /usr/lib/ 
libbroc.so which don't appear to function when the system is booted  
64-bit.

Of course that would mean we need heterogeneous support to run on a  
single homogeneous system!  Will this work on the 1.0 branch?

An alternative worth thinking about is to bypass the library calls  
and start processes using a system() call to invoke the bpsh  
command.  This is a 64-bit executable linked with /usr/lib64/ 
libbproc.so and which successfully launches both 32- and 64-bit  
executables.

I'm currently trying to solve the same issue for LA-MPI :(

David


On Apr 10, 2006, at 9:18 AM, Brian Barrett wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">On Apr 10, 2006, at 11:07 AM, David Gunter wrote:

    </pre>
    <blockquote type="cite">
      <pre wrap="">(flashc 105%) mpiexec -n 4 ./send4
[flashc.lanl.gov:09921] mca: base: component_find: unable to open: /
lib/libc.so.6: version `GLIBC_2.3.4' not found (required by /net/
scratch1/dog/flash64/openmpi/openmpi-1.0.2-32b/lib/openmpi/
mca_paffinity_linux.so) (ignored)
[flashc.lanl.gov:09921] mca: base: component_find: unable to open:
libbproc.so.4: cannot open shared object file: No such file or
directory (ignored)
[flashc.lanl.gov:09921] mca: base: component_find: unable to open:
libbproc.so.4: cannot open shared object file: No such file or
directory (ignored)
[flashc.lanl.gov:09921] mca: base: component_find: unable to open:
libbproc.so.4: cannot open shared object file: No such file or
directory (ignored)
[flashc.lanl.gov:09921] mca: base: component_find: unable to open:
libbproc.so.4: cannot open shared object file: No such file or
directory (ignored)
[flashc.lanl.gov:09921] mca: base: component_find: unable to open:
libbproc.so.4: cannot open shared object file: No such file or
directory (ignored)
mpiexec: relocation error: /net/scratch1/dog/flash64/openmpi/
openmpi-1.0.2-32b/lib/openmpi/mca_soh_bproc.so: undefined symbol:
bproc_nodelist

The problem now looks like /lib/libc.so.6 is not longer available.
Indeed, it is available on the compiler nodes but it cannot be found
on the backend nodes - whoops!
      </pre>
    </blockquote>
    <pre wrap="">Well, that's interesting.  Is this on a bproc platform?  If so, you
might be best off configuring with either --enable-static or --
disable-dlopen.  Either one will prevent components from loading,
which doesn't seem to always work well.

Also, it looks like at least one of the components has a different
libc its linked against than the others.  This makes me think that
perhaps you have some old components from a previous build in your
tree.  You might want to completely remove your installation prefix
(or lib/openmpi in your installation prefix) and run make install  
again.

Are you no longer seeing the errors about epoll?

    </pre>
    <blockquote type="cite">
      <pre wrap="">The other problem is that the -m32 flag didn't make it into mpicc for
some reason.
      </pre>
    </blockquote>
    <pre wrap="">This is expected behavior.  There are going to be more and more cases
where Open MPI provides one wrapper compiler that does the right
thing whether the user passes in -m32 / -m64 (or any of the vendor
options for doing the same thing).  So it will be increasingly
impossible for us to know what to add (but as Jeff said, you can tell
configure to always add -m32 to the wrapper compilers if you want).

Brian
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
    </pre>
  </blockquote>
  <pre wrap=""><!---->
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1018.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="1016.php">David Daniel: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>In reply to:</strong> <a href="1016.php">David Daniel: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1018.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Reply:</strong> <a href="1018.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
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
