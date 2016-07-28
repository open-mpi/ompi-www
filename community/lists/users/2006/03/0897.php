<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 23 18:05:12 2006" -->
<!-- isoreceived="20060323230512" -->
<!-- sent="Thu, 23 Mar 2006 16:05:05 -0700" -->
<!-- isosent="20060323230505" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster" -->
<!-- id="442329A1.4030307_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f96085e03de0.3de0f96085e0_at_ucd.ie" -->
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
<strong>Date:</strong> 2006-03-23 18:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0898.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Previous message:</strong> <a href="0896.php">Michael Kluskens: "[OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>In reply to:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
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
This is now fixed in the trunk with r9393. Should show up in the
nightly build, I think. We had inadvertently set a maximum limit on the
number of app_contexts we could support that came in through the
app_file interface - this limitation has been removed.<br>
<br>
Thanks for catching it!<br>
<br>
Ralph<br>
<br>
<br>
Ravi Manumachu wrote:
<blockquote cite="midf96085e03de0.3de0f96085e0@ucd.ie" type="cite">
  <pre wrap="">Hi Brian,

I have installed OpenMPI-1.1a1r9260 on my SunOS machines. It has solved
the problems. However there is one more issue that I found in my testing
and that I failed to report. This concerns Linux machines too.

My host file is

hosts.txt
---------
csultra06
csultra02
csultra05
csultra08

My app file is 

mpiinit_appfile
---------------
-np 1 /home/cs/manredd/OpenMPI/openmpi-1.1a1r9260/MPITESTS/mpiinit
-np 1 /home/cs/manredd/OpenMPI/openmpi-1.1a1r9260/MPITESTS/mpiinit
-np 1 /home/cs/manredd/OpenMPI/openmpi-1.1a1r9260/MPITESTS/mpiinit
-np 1 /home/cs/manredd/OpenMPI/openmpi-1.1a1r9260/MPITESTS/mpiinit
-np 1 /home/cs/manredd/OpenMPI/openmpi-1.1a1r9260/MPITESTS/mpiinit
-np 1 /home/cs/manredd/OpenMPI/openmpi-1.1a1r9260/MPITESTS/mpiinit
-np 1 /home/cs/manredd/OpenMPI/openmpi-1.1a1r9260/MPITESTS/mpiinit
-np 1 /home/cs/manredd/OpenMPI/openmpi-1.1a1r9260/MPITESTS/mpiinit

My application program is

mpiinit.c
---------

#include &lt;mpi.h&gt;

int main(int argc, char** argv)
{
    int rc, me;
    char pname[MPI_MAX_PROCESSOR_NAME];
    int plen;

    MPI_Init(
       &amp;argc,
       &amp;argv
    );

    rc = MPI_Comm_rank(
            MPI_COMM_WORLD,
            &amp;me
    );

    if (rc != MPI_SUCCESS)
    {
       return rc;
    }

    MPI_Get_processor_name(
       pname,
       &amp;plen
    );

    printf("%s:Hello world from %d\n", pname, me);

    MPI_Finalize();

    return 0;
}

Compilation is successful

csultra06$ mpicc -o mpiinit mpiinit.c

However mpirun prints just 6 statements instead of 8.

csultra06$ mpirun --hostfile hosts.txt --app mpiinit_appfile
csultra02:Hello world from 5
csultra06:Hello world from 0
csultra06:Hello world from 4
csultra02:Hello world from 1
csultra08:Hello world from 3
csultra05:Hello world from 2

The following two more statements are not printed.

csultra05:Hello world from 6
csultra08:Hello world from 7

This behavior I observed on my Linux cluster too.

I have attached the log for "-d" option for your debugging purposes.

Regards,
Ravi.

----- Original Message -----
From: Brian Barrett <a class="moz-txt-link-rfc2396E"
 href="mailto:brbarret@open-mpi.org">&lt;brbarret@open-mpi.org&gt;</a>
Date: Monday, March 13, 2006 7:56 pm
Subject: Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9;
problems on heterogeneous cluster
To: Open MPI Users <a class="moz-txt-link-rfc2396E"
 href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a>

  </pre>
  <blockquote type="cite">
    <pre wrap="">Hi Ravi -

With the help of another Open MPI user, I spent the weekend finding 
a  
couple of issues with Open MPI on Solaris.  I believe you are 
running  
into the same problems.  We're in the process of certifying the  
changes for release as part of 1.0.2, but it's Monday morning and 
the  
release manager hasn't gotten them into the release branch just 
yet.   
Could you give the nightly tarball from our development trunk a try 

and let us know if it solves your problems on Solaris?  You 
probably  
want last night's 1.1a1r9260 release.

    <a class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>

Thanks,

Brian


On Mar 12, 2006, at 11:23 PM, Ravi Manumachu wrote:

    </pre>
    <blockquote type="cite">
      <pre wrap=""> Hi Brian,

 Thank you for your help. I have attached all the files you have 
      </pre>
    </blockquote>
    <pre wrap="">asked&gt;  for in a tar file.
    </pre>
    <blockquote type="cite">
      <pre wrap=""> Please find attached the 'config.log' and 'libmpi.la' for my 
      </pre>
    </blockquote>
    <pre wrap="">Solaris&gt;  installation.
    </pre>
    <blockquote type="cite">
      <pre wrap=""> The output from 'mpicc -showme' is

 sunos$ mpicc -showme
 gcc -I/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/ 
include
 -I/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-
 5.9/include/openmpi/ompi-L/home/cs/manredd/OpenMPI/openmpi-
 1.0.1/OpenMPI-SunOS-5.9/lib -lmpi
 -lorte -lopal -lnsl -lsocket -lthread -laio -lm -lnsl -lsocket -
 lthread -ldl

 There are serious issues when running on just solaris machines.

 I am using the host file and app file shown below. Both the
 machines are
 SunOS and are similar.

 hosts.txt
 ---------
 csultra01 slots=1
 csultra02 slots=1

 mpiinit_appfile
 ---------------
 -np 1 /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_sunos
 -np 1 /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_sunos

 Running mpirun without -d option hangs.

 csultra01$ mpirun --hostfile hosts.txt --app mpiinit_appfile
 hangs

 Running mpirun with -d option dumps core with output in the file
 "mpirun_output_d_option.txt", which is attached. The core is also
 attached.
 Running just on only one host is also not working. The output from
 mpirun using "-d" option for this scenario is attached in file
 "mpirun_output_d_option_one_host.txt".

 I have also attached the list of packages installed on my solaris
 machine in "pkginfo.txt"

 I hope these will help you to resolve the issue.

 Regards,
 Ravi.

      </pre>
      <blockquote type="cite">
        <pre wrap="">----- Original Message -----
From: Brian Barrett <a class="moz-txt-link-rfc2396E"
 href="mailto:brbarret@open-mpi.org">&lt;brbarret@open-mpi.org&gt;</a>
Date: Friday, March 10, 2006 7:09 pm
Subject: Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9;
problems on heterogeneous cluster
To: Open MPI Users <a class="moz-txt-link-rfc2396E"
 href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a>

        </pre>
        <blockquote type="cite">
          <pre wrap="">On Mar 10, 2006, at 12:09 AM, Ravi Manumachu wrote:

          </pre>
          <blockquote type="cite">
            <pre wrap="">I am facing problems running OpenMPI-1.0.1 on a heterogeneous
            </pre>
          </blockquote>
          <pre wrap="">cluster.&gt;
          </pre>
          <blockquote type="cite">
            <pre wrap="">I have a Linux machine and a SunOS machine in this cluster.

linux$ uname -a
Linux pg1cluster01 2.6.8-1.521smp #1 SMP Mon Aug 16 09:25:06
            </pre>
          </blockquote>
        </blockquote>
        <pre wrap="">EDT
        </pre>
        <blockquote type="cite">
          <pre wrap="">2004&gt; i686 i686 i386 GNU/Linux
          </pre>
          <blockquote type="cite">
            <pre wrap="">sunos$ uname -a
SunOS csultra01 5.9 Generic_112233-10 sun4u sparc SUNW,Ultra-5_10
            </pre>
          </blockquote>
          <pre wrap="">Unfortunately, this will not work with Open MPI at present.  Open
MPI
1.0.x does not have any support for running across platforms with
          </pre>
        </blockquote>
        <blockquote type="cite">
          <pre wrap="">different endianness.  Open MPI 1.1.x has much better support for
          </pre>
        </blockquote>
        <blockquote type="cite">
          <pre wrap="">such situations, but is far from complete, as the MPI datatype
engine
does not properly fix up endian issues.  We're working on the
issue,
but can not give a timetable for completion.

Also note that (while not a problem here) Open MPI also does not
support running in a mixed 32 bit / 64 bit environment.  All
processes must be 32 or 64 bit, but not a mix.

          </pre>
          <blockquote type="cite">
            <pre wrap="">$ mpirun --hostfile hosts.txt --app mpiinit_appfile
ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/
mpiinit_sunos:
fatal: relocation error: file
/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/
libmca_common_sm.so.0:
symbol nanosleep: referenced symbol not found
ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/
mpiinit_sunos:
fatal: relocation error: file
/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/
libmca_common_sm.so.0:
symbol nanosleep: referenced symbol not found

I have fixed this by compiling with "-lrt" option to the linker.
            </pre>
          </blockquote>
          <pre wrap="">You shouldn't have to do this...  Could you send me the
          </pre>
        </blockquote>
        <pre wrap="">config.log
        </pre>
        <blockquote type="cite">
          <pre wrap="">file configure for Open MPI, the installed $prefix/lib/libmpi.la
file, and the output of mpicc -showme?

          </pre>
          <blockquote type="cite">
            <pre wrap="">sunos$ mpicc -o mpiinit_sunos mpiinit.c -lrt

However when I run this again, I get the error:

$ mpirun --hostfile hosts.txt --app mpiinit_appfile
[pg1cluster01:19858] ERROR: A daemon on node csultra01 failed
            </pre>
          </blockquote>
        </blockquote>
        <pre wrap="">to
        </pre>
        <blockquote type="cite">
          <pre wrap="">start&gt; as expected.
          </pre>
          <blockquote type="cite">
            <pre wrap="">[pg1cluster01:19858] ERROR: There may be more information
            </pre>
          </blockquote>
          <pre wrap="">available
          </pre>
          <blockquote type="cite">
            <pre wrap="">from
[pg1cluster01:19858] ERROR: the remote shell (see above).
[pg1cluster01:19858] ERROR: The daemon exited unexpectedly with
            </pre>
          </blockquote>
        </blockquote>
        <blockquote type="cite">
          <blockquote type="cite">
            <pre wrap="">status 255.
2 processes killed (possibly by Open MPI)
            </pre>
          </blockquote>
          <pre wrap="">Both of these are quite unexpected.  It looks like there is
something
wrong with your Solaris build.  Can you run on *just* the Solaris
          </pre>
        </blockquote>
        <blockquote type="cite">
          <pre wrap="">machine?  We only have limited resources for testing on Solaris,
but
have not run into this issue before.  What happens if you run
mpirun
on just the Solaris machine with the -d option to mpirun?

          </pre>
          <blockquote type="cite">
            <pre wrap="">Sometimes I get the error.

$ mpirun --hostfile hosts.txt --app mpiinit_appfile
[csultra01:06256] mca_common_sm_mmap_init: ftruncate failed
            </pre>
          </blockquote>
        </blockquote>
        <pre wrap="">with
        </pre>
        <blockquote type="cite">
          <blockquote type="cite">
            <pre wrap="">errno=28
[csultra01:06256] mca_mpool_sm_init: unable to create shared
            </pre>
          </blockquote>
          <pre wrap="">memory
          </pre>
          <blockquote type="cite">
            <pre wrap="">mapping
---------------------------------------------------------------
            </pre>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
    <pre wrap="">-
    </pre>
    <blockquote type="cite">
      <blockquote type="cite">
        <pre wrap="">--
        </pre>
        <blockquote type="cite">
          <pre wrap="">----
          </pre>
          <blockquote type="cite">
            <pre wrap="">----
It looks like MPI_INIT failed for some reason; your parallel
process is
likely to abort.  There are many reasons that a parallel
            </pre>
          </blockquote>
        </blockquote>
        <pre wrap="">process can
        </pre>
        <blockquote type="cite">
          <blockquote type="cite">
            <pre wrap="">fail during MPI_INIT; some of which are due to configuration or
            </pre>
          </blockquote>
        </blockquote>
        <blockquote type="cite">
          <blockquote type="cite">
            <pre wrap="">environment
problems.  This failure appears to be an internal failure;
            </pre>
          </blockquote>
        </blockquote>
        <pre wrap="">here's
        </pre>
        <blockquote type="cite">
          <pre wrap="">some&gt; additional information (which may only be relevant to an
          </pre>
        </blockquote>
        <pre wrap="">Open
        </pre>
        <blockquote type="cite">
          <pre wrap="">MPI&gt; developer):
          </pre>
          <blockquote type="cite">
            <pre wrap="">  PML add procs failed
  --&gt; Returned value -2 instead of OMPI_SUCCESS
---------------------------------------------------------------
            </pre>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote>
    <pre wrap="">-
    </pre>
    <blockquote type="cite">
      <blockquote type="cite">
        <pre wrap="">--
        </pre>
        <blockquote type="cite">
          <pre wrap="">----
          </pre>
          <blockquote type="cite">
            <pre wrap="">----
*** An error occurred in MPI_Init
*** before MPI was initialized
*** MPI_ERRORS_ARE_FATAL (goodbye)
            </pre>
          </blockquote>
          <pre wrap="">This looks like you got far enough along that you ran into our
endianness issues, so this is about the best case you can hope
          </pre>
        </blockquote>
        <pre wrap="">for
        </pre>
        <blockquote type="cite">
          <pre wrap="">in
your configuration.  The ftruncate error worries me, however.
          </pre>
        </blockquote>
        <pre wrap="">But
        </pre>
        <blockquote type="cite">
          <pre wrap="">I
think this is another symptom of something wrong with your Sun
Sparc
build.

Brian

-- 
  Brian Barrett
  Open MPI developer
  <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>


_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

          </pre>
        </blockquote>
        <pre wrap="">&lt;OpenMPI-1.0.1-SunOS-5.9.tar.gz&gt;
        </pre>
      </blockquote>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
      </pre>
    </blockquote>
    <pre wrap="">-- 
  Brian Barrett
  Open MPI developer
  <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>


_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

    </pre>
    <pre wrap=""><hr size="4" width="90%">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext"
 href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
  </blockquote>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0898.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Previous message:</strong> <a href="0896.php">Michael Kluskens: "[OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>In reply to:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
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
