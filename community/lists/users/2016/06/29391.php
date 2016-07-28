<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 10:59:41 2016" -->
<!-- isoreceived="20160607145941" -->
<!-- sent="Tue, 7 Jun 2016 17:59:34 +0300" -->
<!-- isosent="20160607145934" -->
<!-- name="Daniel Letai" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="5756E156.3030905_at_letai.org.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAJB=V02ccu3bQrjXLbCO60eDF_iCn3=JtSZ4TtC9w8zy7RoQVA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-07 10:59:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29392.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-1468-g6011906: error in MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="29390.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29512.php">Dave Love: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
    <br>
    <br>
    <div class="moz-cite-prefix">On 06/06/2016 06:32 PM, Rob Nagler
      wrote:<br>
    </div>
    <blockquote
cite="mid:CAJB=V02ccu3bQrjXLbCO60eDF_iCn3=JtSZ4TtC9w8zy7RoQVA@mail.gmail.com"
      type="cite">
      <div dir="ltr">
        <div class="gmail_extra">Thanks, John. I sometimes wonder if I'm
          the only one out there with this particular problem.</div>
        <div class="gmail_extra"><br>
        </div>
        <div class="gmail_extra">Ralph, thanks for sticking with me. :)
          Using a pool of uids doesn't really work due to the way
          cgroups/containers works. It also would require changing the
          permissions of all of the user's files, which would create
          issues for Jupyter/Hub's access to the files, which is used
          for in situ monitoring.</div>
        <div class="gmail_extra"><br>
        </div>
        <div class="gmail_extra">Docker does not yet handle uid mapping
          at the container level (1.10 added mappings for the daemon).
          We have <a moz-do-not-send="true"
href="https://github.com/radiasoft/containers/blob/fc63d3c0d2ffe7e8a80ed1e2a8dc44a33c08cb46/bin/build-docker.sh#L110">solved
            this problem</a> by adding a uid/gid switcher at container
          startup for our images. The trick is to change the uid/gid of
          the "container user" with usermod and groupmod. This only
          works, however, with images we provide. I'd like a solution
          that allows us to start arbitrary/unsafe images, relying on
          cgroups to their job.</div>
        <div class="gmail_extra"><br>
        </div>
        <div class="gmail_extra">Gilles, the containers do lock the user
          down, but the problem is that the file system space has to be
          dynamically bound to the containers across the cluster.
          JuptyerHub solves this problem by understanding the concept of
          a user, and providing a hook to change the directory to be
          mounted.</div>
        <div class="gmail_extra"><br>
        </div>
        <div class="gmail_extra">Daniel, we've had bad experiences with
          ZoL. It's allocation algorithm degrades rapidly when the file
          system gets over 80% full. It still is not integrated into
          major distros, which leads to dkms nightmares on system
          upgrades. I don't really see Flocker as helping in this
          regard, because the problem is the scheduler, not the file
          system. We know which directory we have to mount from the
          cluster file system, just need to get the scheduler to allow
          us to mount that with the container that is running slurmd.</div>
        <div class="gmail_extra"><br>
        </div>
      </div>
    </blockquote>
    Any storage with high percentage usage will degrade performance. ZoL
    is actually nicer than btrfs in that regard, but xfs does handle low
    free space better most of the time.<br>
    If you have the memory to spare, and the images are mostly
    identical, deduplication (or even better - compression) can help in
    that regard.<br>
    Regarding integration - that's mostly licensing issues, and not a
    reflection of the maturity of the technology itself.<br>
    Regarding dkms - use <a
href="https://github.com/zfsonlinux/zfs/wiki/RHEL-%26-CentOS#kabi-tracking-kmod">kabi-tracking-kmod</a><br>
    Just my 2 cents.<br>
    <blockquote
cite="mid:CAJB=V02ccu3bQrjXLbCO60eDF_iCn3=JtSZ4TtC9w8zy7RoQVA@mail.gmail.com"
      type="cite">
      <div dir="ltr">
        <div class="gmail_extra">I'll play with Slurm Elastic Compute
          this week to see how it works.</div>
        <div class="gmail_extra"><br>
        </div>
        <div class="gmail_extra">Rob<br>
        </div>
        <div class="gmail_extra"><br>
        </div>
      </div>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/06/29382.php">http://www.open-mpi.org/community/lists/users/2016/06/29382.php</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29392.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-1468-g6011906: error in MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="29390.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29512.php">Dave Love: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
