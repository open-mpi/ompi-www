<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 13 08:35:06 2006" -->
<!-- isoreceived="20060413123506" -->
<!-- sent="Thu, 13 Apr 2006 06:35:03 -0600" -->
<!-- isosent="20060413123503" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while loading shared libraries" -->
<!-- id="443E4577.9050404_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="000b01c65ef4$d21bdb70$2402a8c0_at_Aniruddha" -->
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
<strong>Date:</strong> 2006-04-13 08:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1056.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with 1.0.2 and PGI 6.0"</a>
<li><strong>Previous message:</strong> <a href="1054.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>In reply to:</strong> <a href="1054.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18901.php">Rayson Ho: "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
I don't think the LD_LIBRARY_PATH belongs on our command line -
shouldn't you do that before calling mpiexec?<br>
<br>
Ralph<br>
<br>
<br>
Aniruddha Shet wrote:
<blockquote cite="mid000b01c65ef4$d21bdb70$2402a8c0@Aniruddha"
 type="cite">
  <pre wrap="">#PBS -l walltime=0:01:00
#PBS -l nodes=4:ppn=2
#PBS -N aniruddha_job
#PBS -S /bin/bash

cd $HOME/NPB/NPB3.2/NPB3.2-MPI/bin/OMPI/EP/A/4_NO
/home/osu4005/openmpi/openmpi_NO/bin/mpiexec --bynode --prefix 
/home/osu4005/openmpi/openmpi_NO --mca btl mvapi -n 4 
LD_LIBRARY_PATH=/usr/local/intel-8.0-20040716/lib:$LD_LIBRARY_PATH ./ep.A.4 
 &gt; results.ep.A.4

----- Original Message ----- 
From: "Jeff Squyres (jsquyres)" <a class="moz-txt-link-rfc2396E" href="mailto:jsquyres@cisco.com">&lt;jsquyres@cisco.com&gt;</a>
To: "Open MPI Users" <a class="moz-txt-link-rfc2396E" href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a>
Sent: Thursday, April 13, 2006 7:42 AM
Subject: Re: [OMPI users] Error while loading shared libraries


  </pre>
  <blockquote type="cite">
    <pre wrap="">If you are using PBS, the environment of where you ran "qsub" is
automatically copied out to the first node in your job where your script
is run.

Can you send your torque job script?


    </pre>
    <blockquote type="cite">
      <pre wrap="">-----Original Message-----
From: <a class="moz-txt-link-abbreviated" href="mailto:users-bounces@open-mpi.org">users-bounces@open-mpi.org</a>
[<a class="moz-txt-link-freetext" href="mailto:users-bounces@open-mpi.org">mailto:users-bounces@open-mpi.org</a>] On Behalf Of Aniruddha Shet
Sent: Thursday, April 13, 2006 12:13 AM
To: Open MPI Users
Subject: Re: [OMPI users] Error while loading shared libraries

The error message is coming from all nodes.

I explicitly add the path of Intel shared library to
LD_LIBRARY_PATH on my
mpiexec command, in addition to it being added in my shell
startup file.

I make a batch request to PBS. The Intel shared library is on
a common file
system across compute nodes.

----- Original Message ----- 
From: "Jeff Squyres (jsquyres)" <a class="moz-txt-link-rfc2396E" href="mailto:jsquyres@cisco.com">&lt;jsquyres@cisco.com&gt;</a>
To: "Open MPI Users" <a class="moz-txt-link-rfc2396E" href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a>
Sent: Wednesday, April 12, 2006 11:03 PM
Subject: Re: [OMPI users] Error while loading shared libraries


      </pre>
      <blockquote type="cite">
        <pre wrap="">My mistake -- I missed the "orted" part of the error message.

"orted" is a helper application that is intentally launched
        </pre>
      </blockquote>
      <pre wrap="">by Open MPI
      </pre>
      <blockquote type="cite">
        <pre wrap="">during mpirun.  What is happening is that it is not able to find the
Intel libraries, and is therefore failing to launch.

So why is it not finding the Intel shared library?

- is this error message coming from a remote node?
- is your LD_LIBRARY_PATH set for all your remote nodes?
        </pre>
      </blockquote>
      <pre wrap="">For example,
      </pre>
      <blockquote type="cite">
        <pre wrap="">if you're using rsh or ssh to start processes (vs. a
        </pre>
      </blockquote>
      <pre wrap="">resource manager
      </pre>
      <blockquote type="cite">
        <pre wrap="">such as SLURM or Torque),  you will need to ensure that your shell
startup files on all the nodes sets LD_LIBRARY_PATH
        </pre>
      </blockquote>
      <pre wrap="">properly (i.e., it's
      </pre>
      <blockquote type="cite">
        <pre wrap="">not enough to "setenv LD_LIBRARY_PATH ...; mpirun ..." because the
LD_LIBRARY_PATH value won't be set on all the nodes)
- Is the Intel shared library available on all your nodes?
        </pre>
      </blockquote>
      <pre wrap="">(you didn't
      </pre>
      <blockquote type="cite">
        <pre wrap="">specify if the applications that you are able to run were
        </pre>
      </blockquote>
      <pre wrap="">on all your
      </pre>
      <blockquote type="cite">
        <pre wrap="">compute nodes or just on the node where you compiled them)


        </pre>
        <blockquote type="cite">
          <pre wrap="">-----Original Message-----
From: Aniruddha Shet [<a class="moz-txt-link-freetext" href="mailto:shet@cse.ohio-state.edu">mailto:shet@cse.ohio-state.edu</a>]
Sent: Wednesday, April 12, 2006 12:17 PM
To: Open MPI Users
Cc: Jeff Squyres (jsquyres)
Subject: Re: [OMPI users] Error while loading shared libraries

Hi,

I am able to run non-OpenMPI MPI jobs where the MPI library
is built on top
of Intel compilers. Plus, non-MPI jobs built with Intel
compilers run just
fine. So, I am not sure how to go about fixing this.

Thanks,
Aniruddha

----- Original Message -----
From: "Jeff Squyres (jsquyres)" <a class="moz-txt-link-rfc2396E" href="mailto:jsquyres@cisco.com">&lt;jsquyres@cisco.com&gt;</a>
To: "Open MPI Users" <a class="moz-txt-link-rfc2396E" href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a>
Sent: Wednesday, April 12, 2006 8:30 AM
Subject: Re: [OMPI users] Error while loading shared libraries


          </pre>
          <blockquote type="cite">
            <pre wrap="">Greetings.

Your logs look normal.

The problem appears to be how you compiled / linked your final
executable.  You said that you used -static -- I don't know
            </pre>
          </blockquote>
          <pre wrap="">offhand if
          </pre>
          <blockquote type="cite">
            <pre wrap="">that is a supported flag for the intel compiler or not.
            </pre>
          </blockquote>
          <pre wrap="">Did you *link*
          </pre>
          <blockquote type="cite">
            <pre wrap="">with -static, or just *compile* with it?

Try running "ldd" on your executable -- it will show which shared
libraries your executable links against.

I *think* that libcprts.so is a library internal to the
            </pre>
          </blockquote>
          <pre wrap="">Inter compiler
          </pre>
          <blockquote type="cite">
            <pre wrap="">-- so even if icc supports "-static", this library may be
            </pre>
          </blockquote>
          <pre wrap="">exempted...?
          </pre>
          <blockquote type="cite">
            <pre wrap="">(that's a total guess -- I'm not familiar with the
            </pre>
          </blockquote>
        </blockquote>
      </blockquote>
      <pre wrap="">internals of the
      </pre>
      <blockquote type="cite">
        <blockquote type="cite">
          <blockquote type="cite">
            <pre wrap="">Intel compilers)  If this is the case, you might try
            </pre>
          </blockquote>
        </blockquote>
      </blockquote>
      <pre wrap="">installing the
      </pre>
      <blockquote type="cite">
        <blockquote type="cite">
          <blockquote type="cite">
            <pre wrap="">Intel compiler run-time libraries on all your nodes (this seems
unattractive, though).

Regardless, I don't think that this is an MPI problem -- 
            </pre>
          </blockquote>
          <pre wrap="">you might want
          </pre>
          <blockquote type="cite">
            <pre wrap="">to try playing around with compiling some simple [non-MPI]
            </pre>
          </blockquote>
          <pre wrap="">"hello world"
          </pre>
          <blockquote type="cite">
            <pre wrap="">applications with your Intel compiler to figure out how
            </pre>
          </blockquote>
        </blockquote>
      </blockquote>
      <pre wrap="">to compile
      </pre>
      <blockquote type="cite">
        <blockquote type="cite">
          <blockquote type="cite">
            <pre wrap="">things statically.


            </pre>
            <blockquote type="cite">
              <pre wrap="">-----Original Message-----
From: <a class="moz-txt-link-abbreviated" href="mailto:users-bounces@open-mpi.org">users-bounces@open-mpi.org</a>
[<a class="moz-txt-link-freetext" href="mailto:users-bounces@open-mpi.org">mailto:users-bounces@open-mpi.org</a>] On Behalf Of Aniruddha Shet
Sent: Monday, April 10, 2006 10:06 PM
To: <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subject: [OMPI users] Error while loading shared libraries

Hi,

I have built OpenMPI using ifort and icc Intel compilers
with --enable-static --disable-shared options. I compile
              </pre>
            </blockquote>
          </blockquote>
          <pre wrap="">my job using
          </pre>
          <blockquote type="cite">
            <blockquote type="cite">
              <pre wrap="">OpenMPI wrapper compilers, additionally with -static option.
When I run the
job, I get the error 'orted:error while loading shared
              </pre>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
      <pre wrap="">libraries:
      </pre>
      <blockquote type="cite">
        <blockquote type="cite">
          <blockquote type="cite">
            <blockquote type="cite">
              <pre wrap="">libcprts.so.5: cannot open shared object file: No such file
or directory'. I
also have the path of Intel compiler libraries in
LD_LIBRARY_PATH. Please
find attached a tar file having config.log and
              </pre>
            </blockquote>
          </blockquote>
        </blockquote>
      </blockquote>
      <pre wrap="">ompi_info output.
      </pre>
      <blockquote type="cite">
        <blockquote type="cite">
          <blockquote type="cite">
            <blockquote type="cite">
              <pre wrap="">Thanks,
Aniruddha
--------------------------------------------------------------
--------------------
Aniruddha Shet | Project webpage:
<a class="moz-txt-link-freetext" href="http://forge-fre.ornl.gov/molar/index.html">http://forge-fre.ornl.gov/molar/index.html</a>
Graduate Research Associate | Project webpage:
              </pre>
            </blockquote>
          </blockquote>
          <pre wrap=""><a class="moz-txt-link-abbreviated" href="http://www.cs.unm.edu/~fastos">www.cs.unm.edu/~fastos</a>
          </pre>
          <blockquote type="cite">
            <blockquote type="cite">
              <pre wrap="">Dept. of Comp. Sci. &amp; Engg | Personal webpage:
<a class="moz-txt-link-abbreviated" href="http://www.cse.ohio-state.edu/~shet">www.cse.ohio-state.edu/~shet</a>
The Ohio State University | Office: DL 474
2015 Neil Avenue | Phone: +1 (614) 292 7036
Columbus OH 43210-1277 | Cell: +1 (614) 446 1630
--------------------------------------------------------------
--------------------

              </pre>
            </blockquote>
            <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


            </pre>
          </blockquote>
        </blockquote>
        <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

        </pre>
      </blockquote>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

      </pre>
    </blockquote>
    <pre wrap="">_______________________________________________
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
<li><strong>Next message:</strong> <a href="1056.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with 1.0.2 and PGI 6.0"</a>
<li><strong>Previous message:</strong> <a href="1054.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<li><strong>In reply to:</strong> <a href="1054.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18901.php">Rayson Ho: "Re: [OMPI users] Error while loading shared libraries"</a>
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
