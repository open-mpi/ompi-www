<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 27 10:34:06 2006" -->
<!-- isoreceived="20060327153406" -->
<!-- sent="Mon, 27 Mar 2006 08:33:57 -0700" -->
<!-- isosent="20060327153357" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)" -->
<!-- id="442805E5.9020204_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.61.0603271017030.18335_at_papua.etnus.com" -->
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
<strong>Date:</strong> 2006-03-27 10:33:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0918.php">Michael Kluskens: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>Previous message:</strong> <a href="0916.php">Edgar Gabriel: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>In reply to:</strong> <a href="0915.php">Chris Gottbrath: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0936.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
At the moment, this is still in "design" - all I've done for now is
breadboard a connection that places them effectively in the same
comm_world. Each process in both jobs is given the complete comm info
for all the processes. Details of the MPI interface, however, remain to
be determined by my MPI colleagues.<br>
<br>
The mode isn't documented yet since it isn't available in any of the
current tarballs or releases. I'm working on the infrastructure to
allow multiple applications to collaborate across multiple clusters on
a separate development branch - this capability is buried in that work.<br>
<br>
I'm sure documentation will follow as soon as we get a little further
towards completing implementation.<br>
Ralph<br>
<br>
<br>
Chris Gottbrath wrote:
<blockquote cite="midPine.LNX.4.61.0603271017030.18335@papua.etnus.com"
 type="cite">
  <pre wrap="">
Ralph, 

Interesting. How would the two jobs be 'connected' in this
scheme? 

Would they share a single MPI_COMM_WORLD or would they both 
be created with an intercommunicator to the other jobs
MPI_WORLD?

If so, how would that intercommmunicator be obtained in each 
program? 

Is this mode documented anywhere?

Cheers,
Chris

--
Chris Gottbrath
Partner Technologies Engineer    Etnus, LLC
<a class="moz-txt-link-abbreviated" href="mailto:Chris.Gottbrath@etnus.com">Chris.Gottbrath@etnus.com</a>        <a class="moz-txt-link-freetext" href="http://www.etnus.com/">http://www.etnus.com/</a>
Voice: 508-652-7700 x7735        Fax: 508-652-7787

---------- Forwarded message ----------
Date: Mon, 27 Mar 2006 06:44:04 -0700
From: Ralph Castain <a class="moz-txt-link-rfc2396E" href="mailto:rhc@lanl.gov">&lt;rhc@lanl.gov&gt;</a>
To: Open MPI Users <a class="moz-txt-link-rfc2396E" href="mailto:users@open-mpi.org">&lt;users@open-mpi.org&gt;</a>
Subject: Re: [OMPI users] How to establish communication between two separate
    COM WORLD

Actually, in a not-too-distant future release, there will be an option to mpirun called "--connect"
that will allow you to specify that this job is to be connected to a specified earlier job. The
run-time environment will then spawn the new job and exchange all required communication information
between the two jobs for you. You could therefore accomplish your desired operation by:

  </pre>
  <blockquote type="cite">
    <pre wrap="">nohup mpirun --np xx app1
    </pre>
  </blockquote>
  <pre wrap=""><!---->(system returns job number to you)
  </pre>
  <blockquote type="cite">
    <pre wrap="">mpirun --np yy --connect job1 app2
    </pre>
  </blockquote>
  <pre wrap=""><!---->(system starts app2 and connects it to job1)

Should be a little more transparent. No specific coding for making the connection would be required
in your application itself.

Ralph


Jean Latour wrote:
      Hello,

      It seems to me there is only one way to create a communication between
      two MPI_COMM_WORLD :  use MPI_Open_Port with a specific
      IP + port address, and then MPI_comm_connect / MPI_comm_accept.

      In order to ease the port number communication, the use of MPI_publish-name
      / MPI_lookup_name is also possible with the constraint that the "publish"
      must be done before the "lookup", and this involves some synchronization
      between the processes anyway.

      Simple examples can be found in the handbook on MPI : "Using MPI-2"
      by William Gropp et al.

      Best Regards,
      Jean

      Ali Eghlima wrote:



            Hello,

            I have read MPI-2 documents as well as FAQ. I am confused as the best way to
            establish communication
            between two  MPI_COMM_WORLD which has been created by two mpiexec calls on
            the same node.

            mpiexec -conf  config1
                 This start 20 processes on 7 nodes

            mpiexec -conf  config2
                  This start 18 processes on 5 nodes

            I do appreciate any comments or pointer to a document or example.

            Thanks

            Ali,

             

            ------------------------------------------------------------------------

            _______________________________________________
            users mailing list
            <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
            <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


     ________________________________________________________________________________________________
 _______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


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
<li><strong>Next message:</strong> <a href="0918.php">Michael Kluskens: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>Previous message:</strong> <a href="0916.php">Edgar Gabriel: "Re: [OMPI users] MPI_ROOT - required where/when?"</a>
<li><strong>In reply to:</strong> <a href="0915.php">Chris Gottbrath: "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0936.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] How to establish communication between two separate COM WORLD (fwd)"</a>
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
