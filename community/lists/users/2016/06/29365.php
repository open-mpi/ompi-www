<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  4 04:28:18 2016" -->
<!-- isoreceived="20160604082818" -->
<!-- sent="Sat, 4 Jun 2016 11:28:04 +0300" -->
<!-- isosent="20160604082804" -->
<!-- name="Daniel Letai" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="57529114.70704_at_letai.org.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAJB=V02GagbENZjyzMNb5iOngvuGTqN_ewpWoHyt5QnBJaOr2w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Docker Cluster Queue Manager<br>
<strong>From:</strong> Daniel Letai (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-04 04:28:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29366.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29364.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29355.php">Rob Nagler: "[OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29366.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29366.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<html style="direction: ltr;">
  <head>
    <meta content="text/html; charset=windows-1252"
      http-equiv="Content-Type">
    <style type="text/css">body p { margin-bottom: 0cm; margin-top: 0pt; } </style>
  </head>
  <body style="direction: ltr;"
    bidimailui-detected-decoding-type="latin-charset" text="#000000"
    bgcolor="#FFFFFF">
    Did you check shifter?
    <a class="moz-txt-link-freetext" href="https://www.nersc.gov/assets/Uploads/cug2015udi.pdf">https://www.nersc.gov/assets/Uploads/cug2015udi.pdf</a> ,
    <a class="moz-txt-link-freetext" href="https://www.nersc.gov/assets/Uploads/cug2015udi.pdf">https://www.nersc.gov/assets/Uploads/cug2015udi.pdf</a> ,
    <a class="moz-txt-link-freetext" href="http://www.nersc.gov/research-and-development/user-defined-images/">http://www.nersc.gov/research-and-development/user-defined-images/</a> ,
    <a class="moz-txt-link-freetext" href="https://github.com/NERSC/shifter">https://github.com/NERSC/shifter</a><br>
    <br>
    <div class="moz-cite-prefix">On 06/03/2016 01:58 AM, Rob Nagler
      wrote:<br>
    </div>
    <blockquote
cite="mid:CAJB=V02GagbENZjyzMNb5iOngvuGTqN_ewpWoHyt5QnBJaOr2w@mail.gmail.com"
      type="cite">
      <div dir="ltr">We would like to use MPI on Docker with arbitrarily
        configured clusters (e.g. created with StarCluster or bare
        metal). What I'm curious about is if there is a queue manager
        that understands Docker, file systems, MPI, and OpenAuth.
        JupyterHub does a lot of this, but it doesn't interface with
        MPI. Ideally, we'd like users to be able to queue up jobs
        directly from JupyterHub.
        <div><br>
        </div>
        <div>Currently, we can configure and initiate an MPI-compatible
          Docker cluster running on a VPC using Salt. What's missing is
          the ability to manage a queue of these clusters. Here's a list
          of requirements:</div>
        <div><br>
        </div>
        <div>
          <ul
            style="padding-left:2em;margin-top:0px;margin-bottom:16px;color:rgb(51,51,51);font-family:'Helvetica
            Neue',Helvetica,'Segoe UI',Arial,freesans,sans-serif,'Apple
            Color Emoji','Segoe UI Emoji','Segoe UI
            Symbol';line-height:25.6px">
            <li>JupyterHub users do not have Unix user ids</li>
            <li>Containers must be started as a non-root guest user
              (--user)</li>
            <li>JupyterHub user's data directory is mounted in container</li>
            <li>Data is shared via NFS or other cluster file system</li>
            <li>sshd runs in container for MPI as guest user</li>
            <li>Results have to be reported back to GitHub user</li>
            <li>MPI network must be visible (--net=host)</li>
            <li>Queue manager must be compatible with the above</li>
            <li>JupyterHub user is not allowed to interact with Docker
              directly</li>
            <li style="">Docker images are user selectable (from an
              approved list)</li>
            <li style="">Jupyter and MPI containers started from same
              image</li>
          </ul>
          Know of a system which supports this?</div>
        <div><br>
        </div>
        <div>Our code and config are open source, and your feedback
          would be greatly appreciated.</div>
        <div><br>
        </div>
        <div>Salt configuration: <a moz-do-not-send="true"
            href="https://github.com/radiasoft/salt-conf">https://github.com/radiasoft/salt-conf</a><br>
        </div>
        <div>Container builders: <a moz-do-not-send="true"
            href="https://github.com/radiasoft/containers/tree/master/radiasoft">https://github.com/radiasoft/containers/tree/master/radiasoft</a></div>
        <div>Early phase wiki: <a moz-do-not-send="true"
            href="https://github.com/radiasoft/devops/wiki/DockerMPI">https://github.com/radiasoft/devops/wiki/DockerMPI</a></div>
        <div><br>
        </div>
        <div>Thanks,<br>
        </div>
        <div>Rob</div>
        <div><br>
        </div>
      </div>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/06/29355.php">http://www.open-mpi.org/community/lists/users/2016/06/29355.php</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29366.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29364.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29355.php">Rob Nagler: "[OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29366.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29366.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
