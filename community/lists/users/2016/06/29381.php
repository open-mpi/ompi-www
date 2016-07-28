<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 09:08:19 2016" -->
<!-- isoreceived="20160606130819" -->
<!-- sent="Mon, 6 Jun 2016 16:08:14 +0300" -->
<!-- isosent="20160606130814" -->
<!-- name="Daniel Letai" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="575575BE.8060800_at_letai.org.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAPqNE2Ud3eJram4VPNVr3=KX=AbJMHuTQFf=6Uo=uC9yuDkFOQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-06-06 09:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29380.php">Gilles Gouaillardet: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29377.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
    That's why they have acl in ZoL, no?<br>
    <br>
    just bring up a new filesystem for each container, with acl so only
    the owning container can use that fs, and you should be done, no?<br>
    <br>
    To be clear, each container would have to have a unique uid for this
    to work, but together with Ralph's idea of a uid pool this would
    provide good isolation.<br>
    The reason for ZoL filesystems is to ensure isolation as well as the
    other benefits of zfs to docker...<br>
    <br>
    Anyway, clusterhq seem to have a nice product called flocker, which
    might also be relevant for this.<br>
    <br>
    <div class="moz-cite-prefix">On 06/06/2016 12:07 PM, John Hearns
      wrote:<br>
    </div>
    <blockquote
cite="mid:CAPqNE2Ud3eJram4VPNVr3=KX=AbJMHuTQFf=6Uo=uC9yuDkFOQ@mail.gmail.com"
      type="cite">
      <div dir="ltr">Rob, I am not familair with <a
          moz-do-not-send="true" href="http://wakari.io">wakari.io</a>
        <div><br>
        </div>
        <div>However what you say about the Unix userid problem is very
          relevant to many 'shared infrastructure' projects and is a
          topic which comes up in discussions about them.</div>
        <div>Teh concern there is, as you say, if the managers of the
          system have a global filesystem, with shared datasets, then if
          virtual clusters are created on the shared infrastructure, or
          if containers are used, then if the user have root access they
          can have privileges over the global filesystem.</div>
        <div><br>
        </div>
        <div>You are making some very relevant points here.</div>
        <div><br>
        </div>
        <div><br>
        </div>
        <div><br>
        </div>
        <div><br>
        </div>
        <div class="gmail_extra"><br>
          <div class="gmail_quote">On 5 June 2016 at 01:51, Rob Nagler <span
              dir="ltr">&lt;<a moz-do-not-send="true"
                href="mailto:openmpi-wooxi@q33.us" target="_blank">openmpi-wooxi@q33.us</a>&gt;</span>
            wrote:<br>
            <blockquote class="gmail_quote" style="margin:0 0 0
              .8ex;border-left:1px #ccc solid;padding-left:1ex">
              <div dir="ltr">
                <div class="gmail_extra">Thanks! SLURM Elastic Computing
                  seems like it might do the trick. I need to try it
                  out. </div>
                <div class="gmail_extra"><br>
                </div>
                <div class="gmail_extra">xCAT is interesting, too. It
                  seems to be the HPC version of Salt'ed Cobbler. :)  I
                  don't know that it's so important for our problem. We
                  have a small cluster for testing against the cloud,
                  primarily. I could see xCAT being quite powerful for
                  large clusters. </div>
                <div class="gmail_extra"><br>
                </div>
                <div class="gmail_extra">I'm not sure how to explain the
                  Unix user id problem other than a gmail account does
                  not have a corresponding Unix user id. Nor do you have
                  one for your representation on this mailing list. That
                  decoupling is important. The actual execution of unix
                  processes on behalf of users of gmail, this mailing
                  list, etc. run as a Unix single user. That's how
                  JupyterHub containers run. When you click "Start
                  Server" in JupyterHub, it starts a docker container as
                  some system user (uid=1000 in our case), and the
                  container is given access to the user's files via a
                  Docker volume. The container cannot see any other
                  user's files. </div>
                <div class="gmail_extra"><br>
                </div>
                <div class="gmail_extra">In a typical HPC context, the
                  files are all in /home/&lt;unix-user&gt;. The
                  "containment" is done by normal Unix file permissions.
                  It's very easy, but it doesn't work for web apps as
                  described above. Even being able to list all the other
                  users on a system (via "ls /home") is a privacy breach
                  in a web app.</div>
                <span class="HOEnZb"><font color="#888888">
                    <div class="gmail_extra"><br>
                    </div>
                    <div class="gmail_extra">Rob</div>
                    <div class="gmail_extra"><br>
                    </div>
                  </font></span></div>
              <br>
              _______________________________________________<br>
              users mailing list<br>
              <a moz-do-not-send="true" href="mailto:users@open-mpi.org">users@open-mpi.org</a><br>
              Subscription: <a moz-do-not-send="true"
                href="https://www.open-mpi.org/mailman/listinfo.cgi/users"
                rel="noreferrer" target="_blank">https://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>
              Link to this post: <a moz-do-not-send="true"
                href="http://www.open-mpi.org/community/lists/users/2016/06/29369.php"
                rel="noreferrer" target="_blank">http://www.open-mpi.org/community/lists/users/2016/06/29369.php</a><br>
            </blockquote>
          </div>
          <br>
        </div>
      </div>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/06/29377.php">http://www.open-mpi.org/community/lists/users/2016/06/29377.php</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29380.php">Gilles Gouaillardet: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29377.php">John Hearns: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29382.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
